<?php

namespace App\Http\Controllers\API;

use App\Events\AccountVerified;
use App\Http\Requests\ModelVerificationRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Response;

class UserVerificationController extends Controller
{
    /**
     * Verifies user
     */
    public function update(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];
        $user = User::verify($token);

        event(new AccountVerified($user));

        return Response::ok();
    }

    /**
     * Resets verification
     */
    public function destroy(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];

        User::resetVerification($token);

        return Response::ok();
    }
}
