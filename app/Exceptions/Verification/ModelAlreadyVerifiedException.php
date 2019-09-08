<?php

namespace App\Exceptions\Verification;

use Exception;

class ModelAlreadyVerifiedException extends Exception
{
    public function render($request) {
        return response()->json([
            'message' => trans('custom-validation.model_is_already_verified')
        ], 406);
    }
}
