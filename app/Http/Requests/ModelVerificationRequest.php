<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class ModelVerificationRequest extends ApiRequest
{
    private $verificationTokenParam = 'v_token';


    public function getData()
    {
        return [
            'verification_token' => request($this->verificationTokenParam)
        ];
    }

    public function rules()
    {
        return [
            $this->verificationTokenParam => ['required', 'string', 'min:150', 'max:500']
        ];
    }
}