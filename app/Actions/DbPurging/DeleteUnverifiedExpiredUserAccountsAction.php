<?php


namespace App\Actions\DbPurging;


use App\Actions\Action;
use App\User;
use Carbon\Carbon;

class DeleteUnverifiedExpiredUserAccountsAction extends Action
{
    public function execute(): void
    {
        $verification_exp = User::getVerificationExpiration();

        User::unverified()->chunkById(100, function ($users) use ($verification_exp) {
            foreach ($users as $user) {
                $is_verification_expired = Carbon::parse($user->created_at)->addSeconds($verification_exp)->isPast();

                if ($is_verification_expired) {
                    $user->delete();
                }
            }
        });
    }
}