<?php

namespace App\Exceptions\User;

use Exception;

class UnverifiedUserException extends Exception
{
    public function render($request) {
        return response()->json([
            'error' => [
                'message' => trans('custom-validation.unverified_user')
            ]
        ], 403);
    }
}
