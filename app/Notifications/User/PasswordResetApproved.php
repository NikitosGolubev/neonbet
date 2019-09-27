<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordResetApproved extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        $this->queue = 'low';
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(trans('mails/password-reset-approved.subject'))
            ->markdown('mails.user.password-reset-approved', [
                'login_url' => config('user.login_url')
            ]);
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
