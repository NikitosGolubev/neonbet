<?php


namespace App\Services\PasswordReset\ValidationRules\TimingsControl;

use App\Services\Facades\Timezone;
use App\Services\PasswordReset\Contracts\ValidationRuleContract;
use Carbon\Carbon;

abstract class TimingsControl implements ValidationRuleContract
{
    public function validate(): void
    {
        if ($this->isValidationRedundant()) return;

        $this->validationLogic();
    }

    /** Particular validation logic. Without care of if it's going to be needed or not. */
    abstract protected function validationLogic(): void;

    /**
     * Describes the conditions under which validation is pointless.
     * Eliminates validation logic from the necessity to figure out its own relevancy.
     */
    protected function isValidationRedundant(): bool {
        return false;
    }

    /**
     * Calculates difference between current timestamp and given date.
     */
    protected function calcDiffFromNow($date) {
        return Carbon::now()->diffInSeconds($date);
    }

    protected function addSecondsToDateString($date, $seconds) {
        $sum_date = Carbon::parse($date)->addSeconds($seconds);
        $sum_date->setTimezone(Timezone::getCurrent());
        return $sum_date;
    }
}