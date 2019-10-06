<?php

namespace App\Exceptions\Verification;

use Exception;
use Illuminate\Http\Response;

class ModelAlreadyVerifiedException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.model_is_already_verified');
        return Response::error($message, 406);
    }
}
