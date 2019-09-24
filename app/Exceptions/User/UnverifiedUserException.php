<?php

namespace App\Exceptions\User;

use Exception;
use Illuminate\Http\Response;

class UnverifiedUserException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.unverified_user');
        return Response::printError($message, 403);
    }
}
