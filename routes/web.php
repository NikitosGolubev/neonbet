<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'mock-pages', 'namespace' => 'Mock'], function () {
   Route::get('/verify-user', 'MockController@verifyUser');
   Route::get('/reset-verification', 'MockController@resetVerification');
   Route::get('/signin', 'MockController@signin');
});