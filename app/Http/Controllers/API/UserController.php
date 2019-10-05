<?php

namespace App\Http\Controllers\API;

use App\Events\UserRegistered;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\User\UpdateProfileDataRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('recaptcha')->only(['store', 'update']);
    }

    /**
     * Provides user data
     */
    public function show(Request $request) {
        $user = $request->user();
        return response()->json($user, 200);
    }

    /**
     * Creates user
     */
    public function store(RegisterRequest $request) {
        $user_data = $request->getData();

        $user = User::create($user_data);

        $user->assignRole(config('user.roles.ordinary'));

        event(new UserRegistered($user));

        return response()->json([
            'message' => 'Created',
            'verification_expiration' => User::getVerificationExpiration()
            ], 201);
    }

    /**
     * Updates users data
     */
    public function update(UpdateProfileDataRequest $request) {
        $data = $request->getData();
        $user = auth()->user();

        $user->updateProfile($data);

        return response()->json($user, 200);
    }
}