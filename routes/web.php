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

Route::get('/', function () {
    return view('index');
});
Route::group(['middleware'=>['web']], function(){
    Route::get('/cli/{path?}/{param?}', 'HomeController@index');
    Route::get('/logout', 'UserController@logout');
});
Route::get('/auth', function(){
    return view('auth.register');
});
Route::get('login', ['as'=>'login', 'uses'=>function(){return view('auth.register');}]);
Route::get('register', ['as'=>'register', 'uses'=>function(){return view('auth.register');}]);
Route::post('/user_register', 'UserController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/validation', 'UserController@validateEmail');
Route::get('/color', function(){
    return view('theme.color');
});