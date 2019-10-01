<?php


namespace App\Actions\DbPurging;


use App\Actions\Action;
use App\User;
use Carbon\Carbon;

class DeleteUnverifiedExpiredUserAccountsAction extends Action
{
    protected $userVerificationExpirationTime;

    public function __construct()
    {
        $this->userVerificationExpirationTime = User::getVerificationExpiration();
    }

    public function execute(): void
    {
        User::unverified()->chunkById(100, function ($users) {
            foreach ($users as $user) {

                $this->removeUserIfVerificationExpired($user);

            }
        });
    }

    private function removeUserIfVerificationExpired($user) {
        $exp = $this->userVerificationExpirationTime;

        $is_verification_expired = Carbon::parse($user->created_at)->addSeconds($exp)->isPast();

        if ($is_verification_expired) $user->delete();
    }
}