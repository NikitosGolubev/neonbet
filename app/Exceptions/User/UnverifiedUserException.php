<?php

namespace App\Exceptions\User;

use Exception;

class UnverifiedUserException extends Exception
{
    public function render($request) {
        return response()->json([
            'message' => trans('custom-validation.unverified_user')
        ], 403);
    }
}
