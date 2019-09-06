<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AccountVerificationRequest extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $token = $notifiable->getToken();

        return (new MailMessage)
            ->subject(__('mails/account-verification-request.subject'))
            ->markdown('mails.user.verification-request', [
            'verify_url' => $notifiable->getVerificationURL($token),
            'reset_url' => $notifiable->getResetVerificationURL($token)
        ]);
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
