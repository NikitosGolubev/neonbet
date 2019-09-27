<?php

namespace App\Http\Controllers\Mock;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class MockController extends Controller
{
    protected $http;

    public function __construct(Client $http) {
        $this->http = $http;
    }

    public function verifyUser(Request $request) {
        $token = $request->validate([
            'v_token' => 'required|string|min:150|max:500'
        ])['v_token'];

        try  {
            $response = $this->http->put(url('/api/auth/user-verification'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    'v_token' => $token
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }

    public function resetVerification(Request $request) {
        $token = $request->validate([
            'v_token' => 'required|string|min:150|max:500'
        ])['v_token'];

        try  {
            $response = $this->http->delete(url('/api/auth/user-verification'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    'v_token' => $token
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }

    public function signin(Request $request) {
        $data = $request->validate([
            'login' => 'required',
            'password' => 'required',
            'remember_me' => 'nullable'
        ]);

        try  {
            $response = $this->http->post(url('/api/auth/signin'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    'login' => $data['login'],
                    'password' => $data['password'],
                    'remember_me' => request('remember_me')
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }


    public function forgetPassword(Request $request) {
        $email = $request->validate([
            'email' => 'required|string|email|max:255'
        ])['email'];

        try  {
            $response = $this->http->post(url('/api/auth/reset-password'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    "email" => $email,
                    "captcha" => "something"
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }

    public function setPassword(Request $request) {
        $validated = $request->validate([
            'v_token' => 'required|string|min:150|max:500',
            'new_password' => 'required|min:3|max:255'
        ]);

        $token = $validated['v_token'];
        $new_password = $validated['new_password'];

        try  {
            $response = $this->http->put(url('/api/auth/reset-password'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    'v_token' => $token,
                    'password' => $new_password,
                    'password_confirmation' => $new_password
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }

    public function canSetPassword(Request $request) {
        $validated = $request->validate([
            'v_token' => 'required|string|min:150|max:500'
        ]);

        $token = $validated['v_token'];

        try  {
            $response = $this->http->get(url('/api/auth/reset-password'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-Requested-With' => 'XMLHttpRequest'
                ],
                'json' => [
                    'v_token' => $token
                ]
            ]);
        } catch(\Exception $e) {
            $response = json_decode((string) $e->getResponse()->getBody(true), true);
            dd($response);
        }


        $response = json_decode((string) $response->getBody(), true);
        return dd($response);
    }
}
