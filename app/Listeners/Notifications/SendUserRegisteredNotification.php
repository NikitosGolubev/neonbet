<?php

namespace App\Listeners\Notifications;

use App\Events\UserRegistered;
use App\Notifications\User\AccountVerificationRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserRegisteredNotification
{
    public function handle(UserRegistered $event)
    {
        $user = $event->getUser();
        $locale = app()->getLocale();

        $user->notify((new AccountVerificationRequest)->locale($locale));
    }
}
