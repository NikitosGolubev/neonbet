<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

/**
 * Examines recaptcha which user was supposed to solve.
 */
class ReCaptcha implements Rule
{
    private $response;

    public function passes($attribute, $value)
    {
        // @devstart
        return true;
        // @devend

        $http = new Client;

        $response = $http->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('app.recaptcha.secret'),
            'response' => $value
        ]);

        $is_recaptcha_solved_successfully = json_decode($response->getBody())->success;

        return $is_recaptcha_solved_successfully;
    }


    public function message()
    {
        return trans('validation.captcha');
    }
}
