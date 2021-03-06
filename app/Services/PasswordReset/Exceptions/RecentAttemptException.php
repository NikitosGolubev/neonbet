<?php


namespace App\Services\PasswordReset\Exceptions;


use Exception;
use Illuminate\Http\Response;
use Throwable;

class RecentAttemptException extends Exception
{
    protected $allowedAt;

    public function __construct($allowed_at, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->allowedAt = $allowed_at;
        parent::__construct($message, $code, $previous);
    }

    public function render($request) {
        $message = trans('custom-validation.recent_password_reset_attempt', [
            'date' => $this->allowedAt
        ]);

        return Response::error($message, 403);
    }
}