<?php

namespace App\Exceptions\User;

use Exception;
use Illuminate\Http\Response;

class ProvidedNewPasswordEqualToOldException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.new_password_equal_to_old');
        return Response::printError($message, 400);
    }
}
