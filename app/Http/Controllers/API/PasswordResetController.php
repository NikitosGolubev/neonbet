<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Auth\ForgetPasswordRequest;
use App\Http\Requests\Auth\PasswordResetApproveRequest;
use App\Http\Requests\ModelVerificationRequest;
use App\PasswordResetAttempt;
use App\Services\PasswordReset\PasswordReset;
use App\User;
use App\Http\Controllers\Controller;

class PasswordResetController extends Controller
{
    protected $passwordResetService;

    public function __construct(PasswordReset $password_reset_service)
    {
        $this->passwordResetService = $password_reset_service;

        $this->middleware('recaptcha')->only(['store']);
    }

    /** Request for password change */
    public function store(ForgetPasswordRequest $request) {
        $user_email = $request->getData()['email'];

        $user = User::findByEmail($user_email)->first();

        $this->passwordResetService->attempt($user);

        return response()->json(['message' => 'OK'], 200);
    }

    /** If client is permitted to change password? */
    public function edit(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];

        PasswordResetAttempt::validate($token);

        return response()->json(['message' => 'OK'], 200);
    }

    /** Changing old password to new one */
    public function update(PasswordResetApproveRequest $request) {
        $request_data = $request->getData();

        $token = $request_data['verification_token'];
        $new_password = $request_data['new_password'];

        $this->passwordResetService->attemptToSetNewPassword($token, $new_password);

        return response()->json(['message' => 'OK'], 200);
    }

    /** Report from original email owner to ip which requested reset operation. */
    public function destroy(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];

        $reported_ip = $this->passwordResetService->attemptToReportIp($token);

        return response()->json([
            'message' => 'OK',
            'banned_ip' => $reported_ip
        ], 200);
    }
}
