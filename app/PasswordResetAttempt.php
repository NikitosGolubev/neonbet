<?php

namespace App;

use App\ModelEnhancers\Verifiable;
use Illuminate\Database\Eloquent\Model;

class PasswordResetAttempt extends Model
{
    use Verifiable;

    protected function getVerificationExpiration()
    {
        return config('user.password_reset.attempt_expiration');
    }

    protected static function getModelVerificationField($model) {
        return $model->record->approved_at;
    }

    protected static function setModelVerificationFieldValue($model, $value) {
        $model->record->approve($value);
    }

    public $timestamps = false;

    protected $guarded = [];

    public function record() {
        return $this->belongsTo('App\PasswordResetRecord', 'record_id');
    }
}