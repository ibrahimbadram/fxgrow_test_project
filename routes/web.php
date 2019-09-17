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
Route::get('/', ['uses' => 'UserController@loginView']);

Route::get('login', ['uses' => 'UserController@loginView']);
Route::get('register', ['uses' => 'UserController@registerView']);
Route::get('verify', ['uses' => 'UserController@userVerifyEmail']);
Route::get('upload-files', ['uses' => 'UserController@uploadFilesView']);

Route::post('login', ['uses' => 'UserController@login', 'as' => 'user.login']);
Route::post('register', ['uses' => 'UserController@register', 'as' => 'user.register']);

Route::get('logout', ['uses' => 'UserController@logout',  'as' => 'user.logout']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
