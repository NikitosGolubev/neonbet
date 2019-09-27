<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Routing\Router;

class PasswordResetAttemptCreated extends Notification implements ShouldQueue
{
    use Queueable;

    protected $createdAttempt;
    protected $token;
    protected $requestedIp;

    public function __construct($created_attempt)
    {
        $this->createdAttempt = $created_attempt;
        $this->token = $created_attempt->getToken();
        $this->requestedIp = $created_attempt->ipModel->ip;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(trans('mails/password-reset-attempt-created.subject'))
            ->markdown('mails.user.password-reset-attempt-created', [
                'requested_ip' => $this->requestedIp,
                'approve_url' => Router::getPasswordResetApproveUrl($this->token),
                'report_url' => Router::getPasswordResetReportUrl($this->token)
            ]);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
