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
                    'Content-Type' => 'application/json'
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
                    'Content-Type' => 'application/json'
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
