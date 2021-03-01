<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'admin\HomeController@Home')->name('admin-home');

Route::prefix('admin')->group(function () {
    Route::get('/', 'admin\HomeController@Home')->name('admin-home');
    Route::get('/{id}/delete', 'ValidatorController@destroy')->name('admin-delete');
    Route::get('/create', 'ValidatorController@index')->name('admin-create');

Route::get('/usermaster','UserController@homeuser')->name('usermaster');
Route::post('/usermaster/Store','UserController@addUser')->name('usermaster-add');
Route::get('/usermaster/Add','UserController@createUser')->name('createUser');
Route::get('/usermaster/Edit/{id}','UserController@editUser')->name('editUser');
Route::post('/usermaster/Edit/Update','UserController@updateUser')->name('updateUser');
Route::get('/usermaster/Delete/{id}','UserController@deleteUser')->name('deleteUser');

Route::get('/speedboatmaster','SpeedBoatController@index')->name('speedboatmaster');
Route::post('/speedboatmaster/Store','SpeedBoatController@addSpeedboat')->name('speedboatmaster-add');
Route::get('/speedboatmaster/Add','SpeedBoatController@createSpeedboat')->name('createSpeedboat');
Route::get('/speedboatmaster/Edit/{id}','SpeedBoatController@editSpeedboat')->name('editSpeedboat');
Route::post('/speedboatmaster/Edit/Update','SpeedBoatController@updateSpeedboat')->name('updateSpeedboat');
Route::get('/speedboatmaster/Delete/{id}','SpeedBoatController@deleteSpeedboat')->name('deleteSpeedboat');

Route::get('/pembelimaster','PembeliController@index')->name('pembelimaster');
Route::post('/pembelimaster/Store','PembeliController@addPembeli')->name('pembelimaster-add');
Route::get('/pembelimaster/Add','PembeliController@createPembeli')->name('createPembeli');
Route::get('/pembelimaster/Edit/{id}','PembeliController@editPembeli')->name('editPembeli');
Route::post('/pembelimaster/Edit/Update','PembeliController@updatePembeli')->name('updatePembeli');
Route::get('/pembelimaster/Delete/{id}','PembeliController@deletePembeli')->name('deletePembeli');

Route::get('/jadwalmaster','JadwalController@index')->name('jadwalmaster');
Route::post('/jadwalmaster/Store','JadwalController@addJadwal')->name('jadwalmaster-add');
Route::get('/jadwalmaster/Add','JadwalController@createJadwal')->name('createJadwal');
Route::get('/jadwalmaster/Edit/{id}','JadwalController@editJadwal')->name('editJadwal');
Route::post('/jadwalmaster/Edit/Update','JadwalController@updateJadwal')->name('updateJadwal');
Route::get('/jadwalmaster/Delete/{id}','JadwalController@deleteJadwal')->name('deleteJadwal');

});
