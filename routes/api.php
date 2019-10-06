<?php

Route::group(['middleware' => 'user.valid'], function () {
    Route::get('/user', 'UserController@show');
    Route::post('/user/edit', 'UserController@update')->middleware('throttle:7,1');
});

Route::group(['namespace' => 'GeneralData'], function() {
    Route::get('/locales', 'LocaleController@show');
    Route::get('/timezones', 'TimezoneController@show');
});