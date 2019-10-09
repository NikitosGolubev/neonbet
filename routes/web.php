<?php

Route::get('/{any}', 'SpaBootController')->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'mock-pages', 'namespace' => 'Mock'], function () {
   Route::get('/verify-user', 'MockController@verifyUser');
   Route::get('/reset-verification', 'MockController@resetVerification');
   Route::get('/signin', 'MockController@signin');

   Route::get('/forget-password', 'MockController@forgetPassword');
   Route::get('/set-password', 'MockController@setPassword');
   Route::get('/can-set-password', 'MockController@canSetPassword');
   Route::get('/report-set-password', 'MockController@reportSetPassword');
});
