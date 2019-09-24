<?php


namespace App\Services\PasswordReset;

use App\Services\PasswordReset\Storage;
use App\Services\PasswordReset\Contracts\StorageContract;
use App\User;
use Carbon\Carbon;

abstract class AbstractPasswordResetService
{
    /**
     * Tries to offer to user password reset option.
     */
    public function attempt(User $user) {
        $storage = $this->makeStorage($user);

        $validation_rules = $this->rules($storage);
        $this->validate($validation_rules);

        $this->createAttempt($storage);
    }

    /** Creates a data representation of users' attempt to reset password. */
    protected function createAttempt(StorageContract $storage) {
        $current_record = $storage->getCurrentResetRecord();
        $attempt_expiration = config('user.password_reset.attempt_expiration');

        $attempt = $current_record->attempts()->create([
            'ip_id' => $storage->getIpModel()->id,
            'expires_at' => Carbon::now()->addSeconds($attempt_expiration)
        ]);
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