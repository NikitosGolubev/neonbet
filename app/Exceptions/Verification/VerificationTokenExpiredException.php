<?php

namespace App\Exceptions\Verification;

use Exception;
use Illuminate\Http\Response;

class VerificationTokenExpiredException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.verification_token_expired');
        return Response::printError($message, 408);
    }
}
