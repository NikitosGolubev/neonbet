<?php


namespace App\Services\PasswordReset;

use App\Events\PasswordResetApproved;
use App\Events\PasswordResetAttemptCreated;
use App\PasswordResetAttempt;
use App\Services\PasswordReset\Exceptions\IpAlreadyBeenReportedException;
use App\Services\PasswordReset\Storage;
use App\Services\PasswordReset\Contracts\StorageContract;
use App\User;
use Carbon\Carbon;

abstract class AbstractPasswordResetService
{
    /** Tries to offer to user password reset option. */
    public function attempt(User $user) {
        $storage = $this->makeStorage($user);

        $validation_rules = $this->rules($storage);
        $this->validate($validation_rules);

        $attempt = $this->createAttempt($storage);

        event(new PasswordResetAttemptCreated($user, $attempt));
    }

    /** Tries to change user password to new one */
    public function attemptToSetNewPassword($token, $new_password) {
        $reset_attempt = PasswordResetAttempt::getModelFromToken($token);
        PasswordResetAttempt::validate($token, $reset_attempt);

        $user = $reset_attempt->record->user;

        $user->setNewPassword($new_password);

        PasswordResetAttempt::verify($token, false, $reset_attempt);

        event(new PasswordResetApproved($user));
    }

    /** Tries to ban ip which requested password reset */
    public function attemptToReportIp($token) {
        $committed_attempt = PasswordResetAttempt::getModelFromToken($token);
        PasswordResetAttempt::validateOnRecentVerification($committed_attempt);

        $record = $committed_attempt->record;

        if ($record->isReported()) throw new IpAlreadyBeenReportedException;

        $record->report();

        $ip = $committed_attempt->ipModel;

        $ip->banForPasswordResetAbuse($committed_attempt);

        return $ip->ip;
    }

    /** Creates a data representation of users' attempt to reset password. */
    protected function createAttempt(StorageContract $storage) {
        $current_record = $storage->getCurrentResetRecord();
        $attempt_expiration = config('user.password_reset.attempt_expiration');

        $attempt = $current_record->attempts()->create([
            'ip_id' => $storage->getIpModel()->id,
            'expires_at' => Carbon::now()->addSeconds($attempt_expiration)
        ]);

        return $attempt;
    }

    /** Provides list of validation layers to apply before creating attempt */
    protected function rules(StorageContract $storage): array {
        return [];
    }

    /** Factory method. Produces storage, may be overridden. */
    protected function makeStorage(User $user): StorageContract {
        return new Storage($user);
    }

    /** Applies validation rules */
    protected function validate(array $rules) {
        foreach ($rules as $rule) {
            $rule->validate();
        }
    }
}