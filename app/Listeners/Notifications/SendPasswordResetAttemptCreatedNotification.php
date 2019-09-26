<?php

namespace App\Listeners\Notifications;

use App\Events\PasswordResetAttemptCreated;
use App\Notifications\User\PasswordResetAttemptCreated as PasswordResetAttemptCreatedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetAttemptCreatedNotification
{
    public function handle(PasswordResetAttemptCreated $event)
    {
        $user = $event->getUser();
        $attempt = $event->getCreatedAttempt();

        $locale = app()->getLocale();
        $user->notify((new PasswordResetAttemptCreatedNotification($attempt))->locale($locale));
    }
}
