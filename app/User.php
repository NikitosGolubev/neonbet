<?php

namespace App;

use App\ModelEnhancers\Verifiable;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, Bannable, HasApiTokens, Verifiable, HasRoles;

    protected $guard_name = 'api';
    protected $verification_expiration = 86400;

    protected $fillable = [
        'nickname', 'email', 'password', 'fullname', 'birthdate', 'userpick'
    ];

    protected $hidden = [
        'password'
    ];

    // Verification URL for user to follow
    public function getVerificationURL($token) {
        return config('user.verification_url').'?v_token='.$token;
    }

    // Reset URL for user to follow
    public function getResetVerificationURL($token) {
        return config('user.reset_registration_url').'?v_token='.$token;
    }

    public function getVerificationExpiration() {
        return $this->verification_expiration;
    }

    // Mutators
    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    public function setBirthdateAttribute($value) {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d.m.Y', $value)->startOfDay();
    }
}
