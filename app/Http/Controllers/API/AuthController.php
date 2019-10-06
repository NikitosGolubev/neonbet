<?php

namespace App\Http\Controllers\API;

use App\Exceptions\User\InvalidCredentialsException;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Facades\LoginType;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class AuthController extends Controller
{
    private $http;

    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    /*****************************************************/
    /*----------------REQUEST HANDLERS-------------------*/
    /*****************************************************/


    public function signin(LoginRequest $request) {
        $user_data = $request->getData();

        $response = $this->requestUserAuth($user_data['login'], $user_data['password'], $user_data['remember_me']);

        return Response::ok(['auth' => $response]);
    }



    public function logout(Request $request) {
        $request->user()->token()->revoke();

        return Response::ok();
    }


    /*****************************************************/
    /*-------------------HELPERS-------------------------*/
    /*****************************************************/

    /**
     * Attempts to authorize user at system by provided credentials.
     * Encapsulates clientId & clientSecret in order to make API calls from SPA safe.
     *
     * @return array
     * @throws InvalidCredentialsException
     */
    private function requestUserAuth($login, $password, $remember_me) {
        try {
            $response = $this->http->post(url('/oauth/token'), [
                'form_params' => [
                    'grant_type' => config('auth.passport.grant_type'),
                    'client_id' => config('auth.passport.client_id'),
                    'client_secret' => config('auth.passport.client_secret'),
                    'username' => $login,
                    'password' => $password,
                    config('auth.passport.remember_me_param') => $remember_me,
                    'login_type' => LoginType::identify(),
                    'scope' => '*',
                ],
            ]);
        } catch (\Exception $e) {
            throw new InvalidCredentialsException;
        }

        return json_decode($response->getBody());
    }
}
