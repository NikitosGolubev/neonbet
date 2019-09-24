<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\Rules\VerifiedUser;

class ForgetPasswordRequest extends ApiRequest
{
    private $emailParam = 'email';

    public function getData(): array
    {
        return [
            'email' => request($this->emailParam)
        ];
    }

    public function rules()
    {
        return [
            $this->emailParam => [
                'bail', 'required', 'email', 'max:255', 'exists:users,email', new VerifiedUser('email')
            ]
        ];
    }
}
