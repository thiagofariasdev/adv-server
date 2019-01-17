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
Route::group(['middleware'=>['web']], function(){
    Route::get('/home', 'HomeController@index');
    Route::get('/curriculo/{id?}', 'HomeController@index');
    Route::get('/me', 'HomeController@index');
    Route::get('/chat', 'HomeController@index');
    Route::get('/historico', 'HomeController@index');
    Route::get('/busca', 'HomeController@index');
    Route::get('/jobs', 'HomeController@index');
    Route::get('/diligencia', 'HomeController@index');
    Route::get('/logout', 'UserController@logout');
});
Route::get('/', function(){return view('index');});
Route::get('/auth', function(){return view('auth.register');});
Route::get('login', ['as'=>'login', 'uses'=>function(){return view('auth.register');}]);
Route::get('register', ['as'=>'register', 'uses'=>function(){return view('auth.register');}]);
Route::post('/user_register', 'UserController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/validation', 'UserController@validateEmail');
Route::get('/point', 'PositionController@index');