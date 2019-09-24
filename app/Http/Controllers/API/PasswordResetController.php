<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Auth\ForgetPasswordRequest;
use App\Services\PasswordReset\PasswordReset;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordResetController extends Controller
{
    protected $passwordResetService;

    public function __construct(PasswordReset $password_reset_service)
    {
        $this->passwordResetService = $password_reset_service;

        $this->middleware('recaptcha')->only(['store']);
    }

    public function store(ForgetPasswordRequest $request) {
        $user_email = $request->getData()['email'];

        $user = User::findByEmail($user_email)->first();

        $this->passwordResetService->attempt($user);

        return response()->json(['message' => 'OK'], 200);
    }

    public function edit() {

    }

    public function update() {

    }
}
