<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResetRecord extends Model
{
    protected $guarded = [];

    public function isApproved() {
        return !is_null($this->approved_at);
    }

    public function isReported() {
        return !is_null($this->reported_at);
    }

    public function isClosed() {
        return !is_null($this->reported_at);
    }

    /*****************************************/
    /***********MODEL RELATIONSHIPS***********/
    /*****************************************/

    public function attempts() {
        return $this->hasMany('App\PasswordResetAttempt', 'record_id');
    }
}
