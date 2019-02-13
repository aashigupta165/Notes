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
<<<<<<< HEAD
Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');
Route::get('verifyemail/{token}', 'Auth\UserController@verify');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('details', 'API\UserController@details');
    Route::post('logout','API\UserController@logoutApi');
    Route::post('userimagedelete/{id}','API\UserController@userimagedelete');
    Route::post('updateuser/{id}','API\UserController@updateuser');
});

Route::post('store/{id}','UploadController@store');
=======
>>>>>>> 9a3b109... installing blog and learn migration of database

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
