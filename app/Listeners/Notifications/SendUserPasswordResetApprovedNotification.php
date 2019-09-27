<?php

namespace App\Listeners\Notifications;

use App\Events\PasswordResetApproved;
use App\Notifications\User\PasswordResetApproved as PasswordResetApprovedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserPasswordResetApprovedNotification
{
    public function handle(PasswordResetApproved $event)
    {
        $user = $event->getUser();
        $locale = app()->getLocale();

        $user->notify((new PasswordResetApprovedNotification)->locale($locale));
    }
}
