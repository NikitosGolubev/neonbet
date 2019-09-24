<?php


namespace App\Services\LoginType;


use App\Rules\VerifiedUser;
use App\User;

/**
 * Provides opportunity for flexible selection between multiple login types and
 * all the facilities surrounding them.
 */
class LoginType implements LoginTypeContract
{
    /******---------------------------------------------*******/
    /***************DEFAULT SETTINGS (CHANGEABLE)**************/
    /******---------------------------------------------*******/

    /* Default name of param which may be passed at request */
    const LOGIN_TYPE_PARAM = 'login_type';

    /**
     * Provides array with all the possible login types an rules for validating them.
     */
    protected function typesAndRules() {
        $nick_min_len = config('user.nickname_min_len');
        $nick_max_len = config('user.nickname_max_len');

        return [
            'nickname' => [
                'bail', 'required', "min:$nick_min_len",
                "max:$nick_max_len", 'exists:users,nickname', new VerifiedUser('nickname')
            ],

            'email' => [
                'bail', 'required', 'max:255',
                'email', 'exists:users,email', new VerifiedUser('email')
            ]
        ];
    }

    /******---------------------------------------------*******/
    /***********************PUBLIC API*************************/
    /******---------------------------------------------*******/

    // (check comments to methods in their contracts)

    public function unitedValidationMessage(string $validation_message): array {
        return [
            'required' => $validation_message,
            'min' => $validation_message,
            'max' => $validation_message,
            'exists' => $validation_message,
            'email' => $validation_message
        ];
    }

    public function findUserByLogin($login) {
        $login_type = $this->identify();

        $user = User::where($login_type, $login)->get()->first();
        return $user;
    }

    public function identify(): string {
        $default_login_type = $this->defaultType();
        $login_type_param = self::LOGIN_TYPE_PARAM;
        $supported_login_types = $this->types();

        if (request()->has($login_type_param)) {
            $given_login_type = request($login_type_param);

            if (in_array($given_login_type, $supported_login_types)) return $given_login_type;
        }

        return $default_login_type;
    }


    public function getRules(): array {
        $login_type = $this->identify();
        return $this->typesAndRules()[$login_type];
    }

    /******---------------------------------------------*******/
    /******************ENCAPSULATED HELPERS********************/
    /******---------------------------------------------*******/

    /**
     * A login type which would be used, in case if no other relevant option specified.
     */
    protected function defaultType() {
        return $this->types()[0];
    }

    /**
     * Provides an array of all the possible login types.
     */
    protected function types() {
        return array_keys($this->typesAndRules());
    }

}