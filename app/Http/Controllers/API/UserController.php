<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Verification\EmailVerification;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('recaptcha')->only(['store']);
    }

    public function index(Request $request) {
        return $request->user();
    }

    public function store(RegisterRequest $request) {
        $user_data = $request->getData();

        $user = User::create($user_data);

        $verification_token = $user->getToken();
        

        return response()->json();
    }
}
