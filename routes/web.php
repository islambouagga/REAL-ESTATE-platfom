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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('type','TypeController');
Route::resource('offer','OfferController');

Route::resource('assistant','AssistantController');
Route::resource('client','ClientController');

Route::resource('terre','TerreController');
Route::resource('villa','VillaController');

