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
        return $this->bans->first();
    }
}
