<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Mail\Markdown;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'mock-pages', 'namespace' => 'Mock'], function () {
   Route::get('/verify-user', 'MockController@verifyUser');
   Route::get('/reset-verification', 'MockController@resetVerification');
});