<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\ModelVerificationRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserVerificationController extends Controller
{
    /**
     * Verifies user
     */
    public function update(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];
        User::verify($token);

        return response()->json([
            'message' => 'Verified'
        ], 200);
    }

    /**
     * Resets verification
     */
    public function destroy(ModelVerificationRequest $request) {
        $token = $request->getData()['verification_token'];
        User::resetVerification($token);

        return response()->json([
            'message' => 'User removed'
        ], 200);
    }
}
