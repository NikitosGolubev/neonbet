<?php


namespace App\Services\PasswordReset;

use App\Services\PasswordReset\AbstractPasswordResetService;
use App\Services\PasswordReset\Contracts\StorageContract;
use App\Services\PasswordReset\ValidationRules\TimingsControl\EnoughTimePassedSinceLastApproval;
use App\Services\PasswordReset\ValidationRules\TimingsControl\EnoughTimePassedSinceLastAttempt;
use App\Services\PasswordReset\ValidationRules\TimingsControl\EnoughTimePassedSinceLastReport;

class PasswordReset extends AbstractPasswordResetService
{
    protected function rules(StorageContract $storage): array
    {
        $last_reset_record = $storage->getLastResetRecord();

        return [
//            new EnoughTimePassedSinceLastApproval($last_reset_record),
            new EnoughTimePassedSinceLastReport($last_reset_record),
            /** @todo Remove validation comment */
//            new EnoughTimePassedSinceLastAttempt($last_reset_record)
        ];
    }
}