<?php

namespace App\Listeners\Notifications;

use App\Events\AccountVerified;
use App\Notifications\User\AccountVerified as AccountVerifiedNotification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserAccountVerifiedNotification
{
    public function handle(AccountVerified $event)
    {
        $user = $event->getUser();
        $locale = app()->getLocale();

        $user->notify((new AccountVerifiedNotification)->locale($locale));
    }
}
