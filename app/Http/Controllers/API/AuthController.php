<?php

namespace App\Http\Controllers\API;

use App\Exceptions\User\InvalidCredentialsException;
use App\Exceptions\User\UnverifiedUserException;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Facades\LoginType;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    private $http;

    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    public function signin(LoginRequest $request) {
        $user_data = $request->getData();

        $this->checkIfUserVerified($user_data['login']);

        $response = $this->requestUserAuth($user_data['login'], $user_data['password'], $user_data['remember_me']);

        return response()->json($response, 200);
    }

    public function logout(Request $request) {

    }

    /**
     * @throws UnverifiedUserException
     */
    private function checkIfUserVerified($login) {
        $user = LoginType::findUserByLogin($login);

        if (!$user->isVerified()) throw new UnverifiedUserException;
    }

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
                    'scope' => '*',
                ],
            ]);
        } catch (\Exception $e) {
            throw new InvalidCredentialsException;
        }

        return json_decode($response->getBody());
    }
}
