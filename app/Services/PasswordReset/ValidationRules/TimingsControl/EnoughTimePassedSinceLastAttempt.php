<?php


namespace App\Services\PasswordReset\ValidationRules\TimingsControl;


use App\Services\PasswordReset\Exceptions\RecentAttemptException;

class EnoughTimePassedSinceLastAttempt extends TimingsControl
{
    private $lastResetRecord;
    private $attemptsDelays;
    private $prevResetAttempts;

    public function __construct($last_reset_record)
    {
        $this->lastResetRecord = $last_reset_record;

        if (!is_null($last_reset_record)) {
            $this->prevResetAttempts = $last_reset_record->attempts;
        }

        $this->attemptsDelays = config('user.password_reset.attempts_delays');
    }

    protected function validationLogic(): void
    {
        $last_attempt = $this->prevResetAttempts->last();

        $differenceFromNowSinceAttempt = $this->calcDiffFromNow($last_attempt->created_at);
        $minDelayAfterAttempt = $this->getAttemptDelay();

        if ($differenceFromNowSinceAttempt < $minDelayAfterAttempt) {
            $attempted_at = $last_attempt->attempted_at;
            $would_be_allowed_at = $this->addSecondsToDateString($attempted_at, $minDelayAfterAttempt);
            throw new RecentAttemptException($would_be_allowed_at);
        }
    }

    protected function isValidationRedundant(): bool
    {
        if (is_null($this->lastResetRecord)) return true;

        if ($this->lastResetRecord->isClosed()) return true;

        if (is_null($this->prevResetAttempts)) return true;

        if (count($this->prevResetAttempts) ===  0) return true;

        return false;
    }

    /**
     * This method fetches appropriate min delay before attempt.
     * Makes it possible for delay to be progressive according to num attempts committed.
     */
    private function getAttemptDelay() {
        $num_prev_attempts_according_array_numeration = count($this->prevResetAttempts) - 1;

        // If delay is explicitly specified for this num of attempt
        if (array_key_exists($num_prev_attempts_according_array_numeration, $this->attemptsDelays)) {
            $delay = $this->attemptsDelays[$num_prev_attempts_according_array_numeration];
        }

        // Getting last specified delay
        return end($this->attemptsDelays);
    }

}