<?php

namespace App\Exceptions\User;

use Exception;
use Illuminate\Http\Response;
use Throwable;

class BannedIpException extends Exception
{
    protected $ipModel;

    public function __construct($ip_model, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->ipModel = $ip_model;
    }

    public function render($request) {
        $banned_ip = $this->ipModel->ip;
        $is_ban_permanent = $this->ipModel->getBanData()->isPermanent();
        $ban_reason = $this->ipModel->getBanReason();

        if ($is_ban_permanent) {
            $message = trans('custom-validation.permanent_banned_ip', ['ip' => $banned_ip]);
        } else {
            $ban_exp = $this->ipModel->getBanExpiration();
            $message = trans('custom-validation.temporary_banned_ip', ['ip' => $banned_ip, 'exp' => $ban_exp]);
        }

        return Response::error($message, 403, [
            'ban_reason' => $ban_reason
        ]);
    }
}
