<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Routing\Router;
use Illuminate\Notifications\Messages\MailMessage;

class AccountVerificationRequest extends Notification implements ShouldQueue
{
    use Queueable;

    protected $token;

    public function __construct($verification_token)
    {
        $this->token = $verification_token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(trans('mails/account-verification-request.subject'))
            ->markdown('mails.user.verification-request', [
            'verify_url' => Router::getUserVerificationUrl($this->token),
            'reset_url' => Router::getResetUserVerificationUrl($this->token)
        ]);
    }

    public function toArray($notifiable)
    {
        return [];
    }
}
