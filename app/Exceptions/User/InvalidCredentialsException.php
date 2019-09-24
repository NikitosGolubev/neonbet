<?php

namespace App\Exceptions\User;

use Exception;
use Illuminate\Http\Response;

class InvalidCredentialsException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.invalid_login_credentials');
        return Response::printError($message, 401);
    }
}
