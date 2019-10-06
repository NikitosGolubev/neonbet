<?php

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', 'UserController@store');
    Route::post('/signin', 'AuthController@signin');

    Route::put('/user-verification', 'UserVerificationController@update');
    Route::delete('/user-verification', 'UserVerificationController@destroy');

    Route::group(['middleware' => 'user.valid'], function () {
        Route::get('/logout', 'AuthController@logout');
    });

    Route::post('/reset-password', 'PasswordResetController@store');
    Route::get('/reset-password', 'PasswordResetController@edit');
    Route::put('/reset-password', 'PasswordResetController@update');
    Route::delete('/reset-password', 'PasswordResetController@destroy');
});