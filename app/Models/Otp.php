<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Otp extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'type',
        'verified_at',
        'expires_at'
    ];

    protected $casts = [
        'verified_at' => 'datetime',
        'expires_at' => 'datetime'
    ];

    /**
     * Get the user that owns the OTP.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Check if the OTP is expired.
     */
    public function isExpired(): bool
    {
        return $this->expires_at->isPast();
    }

    /**
     * Check if the OTP is verified.
     */
    public function isVerified(): bool
    {
        return $this->verified_at !== null;
    }
}
