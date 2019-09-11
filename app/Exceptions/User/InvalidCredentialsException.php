<?php

namespace App\Exceptions\User;

use Exception;

class InvalidCredentialsException extends Exception
{
    public function render($request) {
        return response()->json([
            'error' => [
                'message' => trans('custom-validation.invalid_login_credentials')
            ]
        ], 401);
    }
}
