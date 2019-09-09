<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\RequestEnhancers\Sanitizable;

use App\Rules\Date\DateRelevantFuture;
use App\Rules\Date\DateRelevantPast;
use App\Rules\Date\DdMmYyyyDateFormat;
use App\Rules\Date\AdultUser;
use App\Rules\Date\ValidDate;
use App\Rules\Fullname;
use App\Rules\StringComplexity;
use App\Rules\Nickname;

class RegisterRequest extends ApiRequest
{
    use Sanitizable;

    private $nicknameParam = 'nickname';
    private $emailParam = 'email';
    private $fullnameParam = 'fullname';
    private $birthdateParam = 'birthdate';
    private $passwordParam = 'password';



    public function getData()
    {
        return [
            'nickname' => request($this->nicknameParam),
            'email' => request($this->emailParam),
            'fullname' => request($this->fullnameParam),
            'birthdate' => request($this->birthdateParam),
            'password' => request($this->passwordParam)
        ];
    }


    protected function getSanitizedParams()
    {
        return [
            $this->nicknameParam,
            $this->emailParam,
            $this->fullnameParam
        ];
    }


    public function rules()
    {
        $nick_min_len = config('user.nickname_min_len');
        $nick_max_len = config('user.nickname_max_len');
        $pasw_min_len = config('user.password_min_len');

        return [
            $this->nicknameParam => [
                'required',
                "min:$nick_min_len",
                "max:$nick_max_len",
                new Nickname,
                'unique:users,nickname'
            ],
            $this->emailParam => ['required', 'max:255', 'email:rfc,dns', 'unique:users,email'],
            $this->fullnameParam => ['required', 'string', 'max:255', new Fullname],
            $this->birthdateParam => [
                'required',
                'string',
                new DdMmYyyyDateFormat,
                new ValidDate,
                new DateRelevantPast,
                new DateRelevantFuture,
                new AdultUser
            ],
            $this->passwordParam => ['required', "min:$pasw_min_len", 'max:255', new StringComplexity, 'confirmed']
        ];
    }
}
