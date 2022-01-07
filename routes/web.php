<?php

use App\Http\Controllers\PyramidController;
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

Route::get('/login', 'LoginController@create')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pyramid', 'PyramidController@index')->name('pyramid');
Route::get('/input-pyramid', 'PyramidController@input')->name('pyramid.input')->middleware('auth');
Route::post('/input-pyramid/import', 'PyramidController@import')->name('pyramid.import')->middleware('auth');

Route::get('/speedometer', 'SpeedometerController@index')->name('speedometer');
Route::get('/input-speedometer', 'SpeedometerController@input')->name('speedometer.input')->middleware('auth');
Route::post('/input-speedometer/import', 'SpeedometerController@import')->name('speedometer.import')->middleware('auth');