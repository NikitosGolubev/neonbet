<?php

namespace App\Exceptions\Verification;

use Exception;

class VerificationTokenInvalidException extends Exception
{
    public function render($request) {
        return response()->json([
            'error' => [
                'message' => trans('custom-validation.invalid_verification_token')
            ]
        ], 400);
    }
}
