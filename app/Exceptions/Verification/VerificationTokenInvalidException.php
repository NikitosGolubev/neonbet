<?php

namespace App\Exceptions\Verification;

use Exception;
use Illuminate\Http\Response;

class VerificationTokenInvalidException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.invalid_verification_token');
        return Response::error($message, 400);
    }
}
