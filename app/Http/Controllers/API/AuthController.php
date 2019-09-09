<?php

namespace App\Http\Controllers\API;

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

        // LoginRequest ensures that user with passed login exists
        $user = LoginType::findUserByLogin($user_data['login']);
        if ($user && !$user->isVerified()) throw new UnverifiedUserException();


        try {
            $response = $this->http->post(url('/oauth/token'), [
                'form_params' => [
                    'grant_type' => config('auth.passport.grant_type'),
                    'client_id' => config('auth.passport.client_id'),
                    'client_secret' => config('auth.passport.client_secret'),
                    'username' => $user_data['login'],
                    'password' => $user_data['password'],
                    'scope' => '*',
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return json_decode((string) $response->getBody(), true);
    }

    public function logout(Request $request) {

    }
}
