<?php

namespace App\Exceptions\Verification;

use Exception;

class VerificationTokenExpiredException extends Exception
{
    public function render($request) {
        return response()->json([
            'message' => trans('validation.verification_token_expired')
        ], 408);
    }
}
