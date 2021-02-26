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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listuser','UserController@index');
Route::get('/listjadwal','JadwalController@listjadwal');
Route::get('/listspeedboat','SpeedboatController@listspeedboat');
Route::get('/speedboat/{id}','SpeedboatController@show');
Route::get('/jadwal/{id}','JadwalController@show');
Route::get('/user/{id}','UserController@show');
