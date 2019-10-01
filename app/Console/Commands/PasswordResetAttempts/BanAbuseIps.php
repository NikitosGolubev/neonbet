<?php

namespace App\Console\Commands\PasswordResetAttempts;

use App\Actions\Banning\BanIpsForAbusePasswordResetAction;
use Illuminate\Console\Command;

class BanAbuseIps extends Command
{
    protected $signature = 'password-reset-attempts:ban-abuse-ips';


    protected $description = 'Bans IP addresses which abused functionality of resetting password.';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle(BanIpsForAbusePasswordResetAction $ban_ip_for_abuse_password_reset)
    {
        $ban_ip_for_abuse_password_reset->execute();
    }
}
