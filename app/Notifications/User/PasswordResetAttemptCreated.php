<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordResetAttemptCreated extends Notification implements ShouldQueue
{
    use Queueable;

    protected $createdAttempt;

    public function __construct($created_attempt)
    {
        $this->createdAttempt = $created_attempt;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        $token = $this->createdAttempt->getToken();

        return (new MailMessage)
                    ->line($token);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
