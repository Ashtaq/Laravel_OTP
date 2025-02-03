<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6 sm:p-8">
                <div wire:loading wire:target="sendOTP,verifyOTP,resetPassword" class="fixed inset-0 bg-black bg-opacity-25 flex items-center justify-center z-50">
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-600 mx-auto"></div>
                        <p class="mt-2 text-sm text-gray-600">Processing...</p>
                    </div>
                </div>
    
    @if($message)
    <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
        {{ $message }}
    </div>
    @endif

    @if($error)
    <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg">
        {{ $error }}
    </div>
    @endif

    <div x-show="$wire.step === 1"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100">
        <h2 class="text-2xl font-bold mb-4">{{ __('Forgot Password') }}</h2>
        <p class="mb-4 text-gray-600">
            {{ __('Enter your email address and we\'ll send you a 6-digit OTP to reset your password.') }}
        </p>

        <form wire:submit="sendOTP">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                <input wire:model="email" id="email" type="email" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                       required autofocus>
                @error('email') <span class="mt-2 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Send OTP') }}
                </button>
            </div>
        </form>
    </div>

    <div x-show="$wire.step === 2"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100">
        <h2 class="text-2xl font-bold mb-4">{{ __('Verify OTP') }}</h2>
        <p class="mb-4 text-gray-600">
            {{ __('Please enter the 6-digit OTP sent to your email.') }}
        </p>

        <form wire:submit="verifyOTP">
            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700">{{ __('Enter 6-digit OTP') }}</label>
                <div class="mt-1" 
                    x-data="{
                        digits: ['', '', '', '', '', ''],
                        otp: @entangle('otp').defer,
                        init() {
                            this.$watch('otp', value => {
                                if (value) {
                                    this.digits = value.split('').concat(Array(6 - value.length).fill(''));
                                }
                            });
                        },
                        focusNext(index) {
                            if (index < 5 && this.digits[index] !== '') {
                                this.$refs[`digit${index + 1}`].focus();
                            }
                            // Check if all digits are filled
                            if (this.digits.every(d => d !== '')) {
                                this.submitForm();
                            }
                        },
                        focusPrev(index) {
                            if (index > 0 && this.digits[index] === '') {
                                this.$refs[`digit${index - 1}`].focus();
                            }
                        },
                        updateOTP() {
                            const newOtp = this.digits.join('');
                            if (newOtp.length === 6 && /^\d{6}$/.test(newOtp)) {
                                this.otp = newOtp;
                                $wire.set('otp', newOtp); // Ensure Livewire gets updated
                                return true;
                            }
                            return false;
                        },
                        handleInput(index, event) {
                            const value = event.target.value.replace(/[^0-9]/g, '');
                            this.digits[index] = value.slice(-1);
                            if (this.updateOTP()) {
                                // If all digits are filled, trigger submission
                                this.submitForm();
                            } else if (value) {
                                this.focusNext(index);
                            }
                        },
                        handlePaste(event) {
                            event.preventDefault();
                            const paste = (event.clipboardData || window.clipboardData).getData('text');
                            const numbers = paste.replace(/[^0-9]/g, '').slice(0, 6);
                            this.digits = [...numbers.padEnd(6, '')]; 
                            if (this.updateOTP() && numbers.length === 6) {
                                this.$refs.digit5.blur();
                                this.submitForm();
                            }
                        },
                        submitForm() {
                            // Ensure the OTP is set in Livewire before submitting
                            const newOtp = this.digits.join('');
                            if (this.digits.every(d => d !== '') && newOtp.length === 6) {
                                $wire.set('otp', newOtp, true).then(() => {
                                    $wire.verifyOTP();
                                });
                            }
                        }
                    }" 
                    @paste.window="handlePaste($event)">
                    <div class="flex justify-center gap-1 max-w-[200px] mx-auto">
                    @for($i = 0; $i < 6; $i++)
                    <input type="text" 
                           inputmode="numeric"
                           x-ref="digit{{$i}}"
                           :value="digits[{{$i}}]"
                           maxlength="1"
                           @input="handleInput({{$i}}, $event)"
                           @keydown.backspace="focusPrev({{$i}})"
                           @keydown.left="focusPrev({{$i}})"
                           @keydown.right="focusNext({{$i}})"
                           @keydown.delete="digits[{{$i}}] = ''"
                           class="w-6 h-8 text-center text-sm font-medium rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:w-8 sm:h-9 sm:text-base flex-1"
                           required>
                    @endfor
                    </div>
                    <!-- Hidden input for form submission -->
                    <input type="hidden" wire:model.live="otp" name="otp">
                </div>
                @error('otp') <span class="mt-2 text-sm text-red-600">{{ $message }}</span> @enderror
                <p class="mt-2 text-sm text-gray-500">{{ __('Didn\'t receive the code?') }} 
                    <button type="button" 
                            wire:click="sendOTP" 
                            wire:loading.attr="disabled"
                            class="text-indigo-600 hover:text-indigo-500 font-medium">
                        {{ __('Resend') }}
                    </button>
                </p>
            </div>

            <div class="mt-4">
                <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Verify OTP') }}
                </button>
            </div>
        </form>
    </div>

    <div x-show="$wire.step === 3"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100">
        <h2 class="text-2xl font-bold mb-4">{{ __('Reset Password') }}</h2>
        <p class="mb-4 text-gray-600">
            {{ __('Please enter your new password.') }}
        </p>

        <form wire:submit="resetPassword">
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('New Password') }}</label>
                <input wire:model="password" id="password" type="password" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                       required>
                @error('password') <span class="mt-2 text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                <input wire:model="password_confirmation" id="password_confirmation" type="password" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                       required>
            </div>

            <div class="mt-4">
                <button type="submit" 
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
            </div>
        </div>
    </div>
</div>
