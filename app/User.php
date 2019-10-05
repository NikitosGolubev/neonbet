<?php

namespace App;

use App\Exceptions\User\ProvidedNewPasswordEqualToOldException;
use App\ModelEnhancers\Verifiable;
use App\Services\Facades\LoginType;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, Bannable, HasApiTokens, Verifiable, HasRoles;

    protected $guard_name = 'api';

    protected $fillable = [
        'nickname', 'email', 'password', 'fullname', 'birthdate', 'userpick'
    ];

    protected $hidden = [
        'password'
    ];


    /*****************************************/
    /*************VERIFICATION****************/
    /*****************************************/

    public static function getVerificationExpiration()
    {
        return config('user.password_reset.attempt_expiration');
    }


    /*****************************************/
    /*****LARAVEL PASSPORT CUSTOMIZATION******/
    /*****************************************/

    public function findForPassport($username)
    {
        $login_type = LoginType::identify();
        return $this->where($login_type, $username)->first();
    }


    /*****************************************/
    /***************MUTATORS******************/
    /*****************************************/

    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    public function setBirthdateAttribute($value) {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d.m.Y', $value)->toDate();
    }

    public function setUserpickAttribute($value) {
        $avatar_dir = $this->getAvatarDirectory();

        // Removing prev avatars
        $files = Storage::disk('public')->files($avatar_dir);
        Storage::disk('public')->delete($files);

        $path = Storage::disk('public')->putFile($avatar_dir, $value);

        $this->attributes['userpick'] = Storage::url($path);
    }


    /*****************************************/
    /*************MODEL SCOPES****************/
    /*****************************************/

    public function scopeFindByEmail($query, $email) {
        return $query->where('email', $email);
    }

    public function scopeUnverified($query) {
        return $query->whereNull('verified_at');
    }

    public function scopeVerified($query) {
        return $query->whereNotNull('verified_at');
    }


    /*****************************************/
    /***********MODEL RELATIONSHIPS***********/
    /*****************************************/

    public function passwordResetRecords() {
        return $this->hasMany('App\PasswordResetRecord', 'user_id');
    }


    /*****************************************/
    /***********CONVENIENT SETTERS************/
    /*****************************************/

    public function setNewPassword($password) {
        if (Hash::check($password, $this->password)) {
            throw new ProvidedNewPasswordEqualToOldException;
        }

        $this->password = $password;
        $this->save();
    }


    /*****************************************/
    /***********CONVENIENT GETTERS************/
    /*****************************************/

    public function getAvatarDirectory() {
        return 'users/'.$this->id.'/avatar';
    }


    /*****************************************/
    /************OTHER USEFUL API*************/
    /*****************************************/

    public function updateProfile($data) {
        try {
            if ($data['avatar']) $this->userpick = $data['avatar'];
            if ($data['nickname']) $this->nickname = $data['nickname'];
            if ($data['fullname']) $this->fullname = $data['fullname'];

            $this->save();
        } catch (\Exception $e) {
            return false;
        }
    }
}
