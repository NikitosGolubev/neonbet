<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\RequestEnhancers\Sanitizable;
use App\Services\Facades\LoginType;

/**
 * Handles the validation for sign up request.
 */
class LoginRequest extends ApiRequest
{
    use Sanitizable;

    private $loginParam = 'login';
    private $passwordParam = 'password';



    public function getData()
    {
        return [
            'login' => request($this->loginParam),
            'password' => request($this->passwordParam)
        ];
    }


    protected function getSanitizedParams()
    {
        return [$this->loginParam];
    }


    public function rules()
    {
        $pasw_min_len = config('user.password_min_len');

        return [
            'login' => LoginType::getRules(),
            'password' => ['required', "min:$pasw_min_len", "max:255"]
        ];
    }


    public function messages()
    {
        // Setting 1 united message to any kind of validation errors.
        $validation_message = trans('custom-validation.invalid_login_credentials');

        $login_validation_messages = LoginType::unitedValidationMessage($validation_message);

        $messages = [
            'password.required' => $validation_message,
            'password.min' => $validation_message,
            'password.max' => $validation_message
        ];

        return array_merge($messages, $login_validation_messages);
    }
}
