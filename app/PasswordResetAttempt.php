<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResetAttempt extends Model
{
    public $timestamps = false;

    protected $guarded = [];
}
