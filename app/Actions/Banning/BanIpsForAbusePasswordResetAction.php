<?php


namespace App\Actions\Banning;


use App\Actions\Action;
use App\PasswordResetRecord;
use Carbon\Carbon;

class BanIpsForAbusePasswordResetAction extends Action
{
    protected $timeSpanCanceledAttemptsCollected;
    protected $maxNumCanceledAttempts;

    public function __construct()
    {
        $time_span = config('user.password_reset.timespan_to_count_abuse_from_ip');

        $this->timeSpanCanceledAttemptsCollected = Carbon::now()->subSeconds($time_span)->toDateTimeString();
        $this->maxNumCanceledAttempts = config('user.password_reset.max_num_canceled_attempt_during_timespan');
    }

    public function execute(): void
    {
        // Looping through not closed records
        PasswordResetRecord::with('attempts')->isNotClosed()->chunkById(10, function ($records) {
           foreach ($records as $record) {
               $attempts = $record->attempts;

               foreach ($attempts as $attempt) {

                   $ip = $attempt->ipModel;

                   $num_canceled_attempts_from_ip = $this->getNumCancelledAttemptsByIp($ip);

                   if ($num_canceled_attempts_from_ip > $this->maxNumCanceledAttempts) {
                       $ip->banForPasswordResetAbuse();
                   }
               }
           }
        });
    }

    private function getNumCancelledAttemptsByIp($ip) {
        $now = Carbon::now()->toDateTimeString();

        $cancelled_attempts = $ip->passwordResetAttempts()
            ->attemptedAtSince($this->timeSpanCanceledAttemptsCollected)
            ->isExpired()
            ->get();

        if (!is_null($cancelled_attempts)) {
            return count($cancelled_attempts);
        }

        return 0;
    }
}