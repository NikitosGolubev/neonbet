<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;
use App\RuleGroups\VerificationTokenRules;

class ModelVerificationRequest extends ApiRequest
{
    private $verificationTokenParam = 'v_token';


    public function getData(): array
    {
        return [
            'verification_token' => request($this->verificationTokenParam)
        ];
    }

    public function rules()
    {
        return [
            $this->verificationTokenParam => VerificationTokenRules::get(['required'])
        ];
    }
}