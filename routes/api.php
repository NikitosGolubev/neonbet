<?php

Route::group(['namespace' => 'API', 'middleware' => 'user.general_data'], function() {

    Route::group(['prefix' => 'auth'], function () {
        Route::post('/register', 'UserController@store');
        Route::post('/signin', 'AuthController@signin');

        Route::put('/user-verification', 'UserVerificationController@update');
        Route::delete('/user-verification', 'UserVerificationController@destroy');

        Route::group(['middleware' => 'user.valid'], function () {
            Route::get('/logout', 'AuthController@logout');

        });

        // reset password apply
        // reset password validation & functionality
    });

    Route::group(['middleware' => 'user.valid'], function () {
        Route::get('/user', 'UserController@show');
    });

    Route::group(['namespace' => 'GeneralData'], function() {
        Route::get('/locales', 'LocaleController@show');
        Route::get('/timezones', 'TimezoneController@show');
    });
});