<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResetRecord extends Model
{
    protected $guarded = [];


    /*****************************************/
    /***********CORE FUNCTIONALITY************/
    /*****************************************/

    public function isApproved() {
        return !is_null($this->approved_at);
    }

    public function isReported() {
        return !is_null($this->reported_at);
    }

    public function isClosed() {
        return !is_null($this->closed_at);
    }

    public function approve($value) {
        $this->approved_at = $value;
        $this->closed_at = now();
        $this->save();
    }

    public function report() {
        $this->reported_at = now();
        $this->closed_at = now();
        $this->save();
    }


    /*****************************************/
    /***********MODEL RELATIONSHIPS***********/
    /*****************************************/

    public function attempts() {
        return $this->hasMany('App\PasswordResetAttempt', 'record_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }


    /*****************************************/
    /**************QUERY SCOPES***************/
    /*****************************************/

    public function scopeIsNotClosed($query) {
        return $query->whereNull('closed_at');
    }
}
