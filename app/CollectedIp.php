<?php

namespace App;

use App\Services\Facades\Timezone;
use Carbon\Carbon;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Ban\Bannable as BannableContract;

class CollectedIp extends Model implements BannableContract
{
    use Bannable;

    protected $fillable = ['ip'];

    /** Returns ban reason for particular */
    public function getBanReason() {
        return $this->getBanData()->comment;
    }

    /** Returns ban expiration */
    public function getBanExpiration() {
        $timezone = Timezone::getCurrent();
        $ban_exp = $this->getBanData()->expired_at;

        return Carbon::parse($ban_exp)->setTimezone($timezone);
    }

    /** Returns ban-specific data */
    public function getBanData() {
        return $this->bans->last();
    }

    public function banForPasswordResetAbuse() {
        if ($this->isNotBanned()) {
            $reason = trans('bans.ip_password_reset_abuse');

            $isDerivedPermanentBan = $this->banPermanentIfTempBansExceeded($reason);

            if (!$isDerivedPermanentBan) {
                $ban_length = config('user.ip.bans_length.password_reset_abuse');

                $exp = Carbon::now()->addSeconds($ban_length);
                return $this->ban([
                    'expired_at' => $exp,
                    'comment' => $reason
                ]);
            }
        }
    }

    /** Bans model permanently if it has more than allowed temporary bans in the past. */
    public function banPermanentIfTempBansExceeded($current_ban_reason) {
        $max_num_temp_bans = config('user.ip.max_temp_bans');
        $num_prev_bans = count($this->bans);
        $permanent_ban_reason = trans('bans.ip_temp_bans_exceeded', ['number' => $max_num_temp_bans]);
        $reason = $permanent_ban_reason.' '.$current_ban_reason;

        if ($num_prev_bans >= $max_num_temp_bans) {
            $this->ban([
                'comment' => $reason
            ]);

            return true;
        }

        return false;
    }


    /*****************************************/
    /***********MODEL RELATIONSHIPS***********/
    /*****************************************/

    public function passwordResetAttempts() {
        return $this->hasMany('App\PasswordResetAttempt', 'ip_id');
    }
}
