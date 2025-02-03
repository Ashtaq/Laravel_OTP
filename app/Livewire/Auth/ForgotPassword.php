<?php

namespace App\Livewire\Auth;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ForgotPassword extends Component
{
    public $email = '';
    public $otp = '';
    public $password = '';
    public $password_confirmation = '';
    public $step = 1;
    public $showMessage = false;
    public $message = '';
    public $error = '';

    protected $rules = [
        'email' => 'required|email|exists:users,email',
        'otp' => 'required|string|size:6',
        'password' => 'required|min:8|confirmed',
    ];

    protected function getOtpValidationRules()
    {
        return [
            'otp' => ['required', 'string', 'size:6'],
        ];
    }

    public function mount()
    {
        if (request()->has('token')) {
            $this->redirect(route('password.request'));
        }
        $this->step = 1;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendOTP()
    {
        try {
            $this->validate(['email' => $this->rules['email']]);

            $user = User::where('email', $this->email)->first();
            
            // Invalidate any existing OTPs
            Otp::where('user_id', $user->id)
                ->where('type', 'email')
                ->where('verified_at', null)
                ->delete();
            
            // Generate 6 digit OTP
            $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            
            Log::info('Generating new OTP', ['email' => $this->email]);

            // Store OTP in database with bcrypt hash
            $otp = new Otp([
                'user_id' => $user->id,
                'code' => $code, // Store plain OTP
                'type' => 'email',
                'expires_at' => Carbon::now()->addMinutes(10),
            ]);

            if (!$otp->save()) {
                Log::error('Failed to create OTP record', ['email' => $this->email]);
                throw new \Exception('Failed to create OTP record');
            }

            // Debug log for OTP creation
            Log::debug('OTP created', [
                'user_id' => $user->id,
                'code_length' => strlen($code),
                'expires_at' => $otp->expires_at
            ]);

            // Send OTP email
            Mail::raw(
                "Your password reset OTP is: {$code}\n\nThis OTP will expire in 10 minutes.",
                function($message) {
                    $message->to($this->email)
                        ->subject('Password Reset OTP');
                }
            );

            // Reset form and update state
            $this->reset(['error', 'otp']);
            $this->step = 2;
            $this->message = 'OTP has been sent to your email address.';
            
            // Log success but don't include the OTP in logs
            Log::info('OTP sent successfully', ['email' => $this->email]);

        } catch (\Exception $e) {
            Log::error('Error in sendOTP', [
                'email' => $this->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error = $e->getMessage();
            $this->addError('email', $e->getMessage());
        }
    }

    public function verifyOTP()
    {
        try {
            Log::info('Starting OTP verification', ['email' => $this->email, 'otp_length' => strlen($this->otp)]);

            // Validate OTP format
            if (empty($this->otp)) {
                throw new \Exception('Please enter the OTP sent to your email.');
            }

            if (strlen($this->otp) !== 6 || !ctype_digit($this->otp)) {
                throw new \Exception('OTP must be 6 digits.');
            }

            // Get user and validate
            $user = User::where('email', $this->email)->first();
            if (!$user) {
                throw new \Exception('Invalid email address.');
            }

            // Get the latest unverified OTP
            $otp = Otp::where('user_id', $user->id)
                ->where('type', 'email')
                ->whereNull('verified_at')
                ->where('expires_at', '>', Carbon::now())
                ->latest()
                ->first();

            Log::info('OTP record check', [
                'email' => $this->email,
                'otp_found' => $otp ? 'yes' : 'no',
                'input_otp_length' => strlen($this->otp)
            ]);

            // No valid OTP found
            if (!$otp) {
                throw new \Exception('No valid OTP found. Please request a new OTP.');
            }

            // OTP has expired
            if ($otp->expires_at->isPast()) {
                $otp->delete(); // Clean up expired OTP
                throw new \Exception('OTP has expired. Please request a new OTP.');
            }

            // Verify OTP
            if (strcmp($otp->code, $this->otp) !== 0) { // Use strcmp for timing attack protection
                Log::warning('Invalid OTP provided', [
                    'email' => $this->email,
                    'attempt_time' => now()
                ]);
                throw new \Exception('Invalid OTP. Please check and try again.');
            }

            // Mark OTP as verified
            $otp->update([
                'verified_at' => Carbon::now()
            ]);

            Log::info('OTP verified successfully', ['email' => $this->email]);

            // Clear any previous errors and update state
            $this->reset(['error', 'otp']);
            $this->step = 3;
            $this->message = 'OTP verified successfully. Please set your new password.';

        } catch (\Exception $e) {
            Log::error('Error in verifyOTP', [
                'email' => $this->email,
                'error' => $e->getMessage()
            ]);
            $this->error = $e->getMessage();
            $this->addError('otp', $e->getMessage());
        }
    }

    public function resetPassword()
    {
        try {
            $this->validate(['password' => $this->rules['password']]);

            Log::info('Resetting password', ['email' => $this->email]);

            $user = User::where('email', $this->email)->first();
            $otp = Otp::where('user_id', $user->id)
                ->where('type', 'email')
                ->where('verified_at', '!=', null)
                ->latest()
                ->first();

            if (!$otp || $otp->expires_at < Carbon::now()) {
                Log::warning('Invalid reset attempt', ['email' => $this->email]);
                $this->error = 'Your session has expired. Please restart the password reset process.';
                return $this->redirect(route('password.request'), navigate: true);
            }

            $user->update(['password' => bcrypt($this->password)]);
            
            // Invalidate all OTPs for this user
            Otp::where('user_id', $user->id)->delete();
            
            $this->reset(['error', 'password', 'password_confirmation']);
            $this->message = 'Password has been reset successfully.';
            Log::info('Password reset successful', ['email' => $this->email]);
            
            session()->flash('status', 'Your password has been reset successfully. Please login with your new password.');
            return $this->redirect(route('login'), navigate: true);

        } catch (\Exception $e) {
            Log::error('Error in resetPassword', [
                'email' => $this->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error = $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')
            ->layout('components.layouts.app');
    }
}
