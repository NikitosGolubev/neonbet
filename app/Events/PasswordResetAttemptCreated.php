<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PasswordResetAttemptCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $user;
    protected $createdAttempt;

    public function __construct(User $user, $created_attempt)
    {
        $this->user = $user;
        $this->createdAttempt = $created_attempt;
    }

    public function getUser() {
        return $this->user;
    }

    public function getCreatedAttempt() {
        return $this->createdAttempt;
    }
}
