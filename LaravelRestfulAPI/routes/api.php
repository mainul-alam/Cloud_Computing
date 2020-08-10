<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

#Route::middleware('auth:api')->get('/user', function (Request $request) {
 #   return $request->user();
#});

Route::get('Users', 'ApiController@getAllUser');
Route::get('employee/{id}', 'ApiController@getEmployee');
Route::post('new_employee', 'ApiController@createEmployee');
Route::put('Users/{id}', 'ApiController@updateUser');
Route::delete('Users/{id}','ApiController@deleteUser');