<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\RequestEnhancers\Sanitizable;
use App\RuleGroups\PasswordRules;
use App\Services\Facades\LoginType;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;


/**
 * Handles the validation for sign up request.
 */
class LoginRequest extends ApiRequest
{
    use Sanitizable;

    private $loginParam = 'login';
    private $passwordParam = 'password';
    private $rememberMeParam = 'remember_me';



    public function getData(): array
    {
        return [
            'login' => request($this->loginParam),
            'password' => request($this->passwordParam),
            'remember_me' => !!request($this->rememberMeParam)
        ];
    }


    protected function getSanitizedParams()
    {
        return [$this->loginParam];
    }


    public function rules()
    {
        return [
            $this->loginParam => LoginType::getRules(),
            $this->passwordParam => PasswordRules::get(['bail', 'required']),
        ];
    }

    // United message for any kind of errors
    protected function failedValidation(Validator $validator)
    {
        $validation_message = trans('custom-validation.invalid_login_credentials');

        Response::printError($validation_message, 422);
    }
}
