<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware'=>'auth:api'], function(){
    Route::post('/set_position', 'PositionController@set');
    Route::get('/position', 'PositionController@get');
    Route::post('/create_demand', 'DemandController@create');
    Route::get('/get_demands', 'DemandController@index');
    Route::post('/login', 'UserController@api_login');
});
Route::get('/demands', 'DemandController@index');
