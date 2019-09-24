<?php


namespace App\Services\PasswordReset\ValidationRules\TimingsControl;


use App\Services\PasswordReset\Exceptions\RecentReportException;

class EnoughTimePassedSinceLastReport extends TimingsControl
{
    private $lastResetRecord;
    private $minTimeToBePassed;

    public function __construct($last_reset_record)
    {
        $this->lastResetRecord = $last_reset_record;
        $this->minTimeToBePassed = config('user.password_reset.min_time_to_allow_attempt_after_report');
    }

    protected function validationLogic(): void
    {
        $differenceFromNowSinceReport = $this->calcDiffFromNow($this->lastResetRecord->reported_at);

        if ($differenceFromNowSinceReport < $this->minTimeToBePassed) {
            $reported_at = $this->lastResetRecord->reported_at;
            $would_be_allowed_at = $this->addSecondsToDateString($reported_at, $this->minTimeToBePassed);
            throw new RecentReportException($would_be_allowed_at);
        }
    }

    protected function isValidationRedundant(): bool
    {
        if (is_null($this->lastResetRecord)) return true;

        if (!$this->lastResetRecord->isReported()) return true;

        return false;
    }
}