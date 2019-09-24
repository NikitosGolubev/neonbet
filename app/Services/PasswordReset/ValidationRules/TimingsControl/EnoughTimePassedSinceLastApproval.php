<?php


namespace App\Services\PasswordReset\ValidationRules\TimingsControl;


use App\Services\PasswordReset\Exceptions\RecentApproveException;

class EnoughTimePassedSinceLastApproval extends TimingsControl
{
    private $lastResetRecord;
    private $minTimeToBePassed;

    public function __construct($last_reset_record)
    {
        $this->lastResetRecord = $last_reset_record;
        $this->minTimeToBePassed = config('user.password_reset.min_time_to_allow_attempt_after_approve');
    }

    public function validationLogic(): void
    {
        $differenceFromNowSinceApprove = $this->calcDiffFromNow($this->lastResetRecord->approved_at);

        if ($differenceFromNowSinceApprove < $this->minTimeToBePassed) {
            $approved_at = $this->lastResetRecord->approved_at;
            $would_be_allowed_at = $this->addSecondsToDateString($approved_at, $this->minTimeToBePassed);
            throw new RecentApproveException($would_be_allowed_at);
        }
    }

    protected function isValidationRedundant(): bool {
        if (is_null($this->lastResetRecord)) return true;

        if (!$this->lastResetRecord->isApproved()) return true;

        return false;
    }
}