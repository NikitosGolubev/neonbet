<?php

namespace App\Http\Controllers\API;

use App\Events\UserRegistered;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\User\UpdateProfileDataRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

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

        return Response::ok(['user' => $user]);
    }

    /**
     * Creates user
     */
    public function store(RegisterRequest $request) {
        $user_data = $request->getData();

        $user = User::create($user_data);

        $user->assignRole(config('user.roles.ordinary'));

        event(new UserRegistered($user));

        $verification_exp = User::getVerificationExpiration();

        return Response::success('Created', 201, ['verification_exp' => $verification_exp]);
    }

    /**
     * Updates users data
     */
    public function update(UpdateProfileDataRequest $request) {
        $data = $request->getData();
        $user = auth()->user();

        $user->updateProfile($data);

        return Response::ok(['user' => $user]);
    }
}