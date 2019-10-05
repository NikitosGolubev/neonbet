<?php

Route::group([
    'namespace' => 'API',
    'middleware' => ['user.general_data', 'local', 'security.filter_ip']],
    function() {

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

        Route::group(['middleware' => 'user.valid'], function () {
            Route::get('/user', 'UserController@show');
            Route::post('/user/edit', 'UserController@update')->middleware('throttle:7,1');
        });

        Route::group(['namespace' => 'GeneralData'], function() {
            Route::get('/locales', 'LocaleController@show');
            Route::get('/timezones', 'TimezoneController@show');
        });

});