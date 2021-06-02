<?php

use App\Offer;
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

    return view('welcome')->with('offers',Offer::with('createByUser')->get())->with('offers6',Offer::latest()->take(6)->with('createByUser')->get())->with('randomOffers',Offer::inRandomOrder()->limit(5)->get());
});

Route::get('/about', function (){
   return view('about');
});
Route::get('/contact', function (){
   return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('type','TypeController');
Route::resource('offer','OfferController');

Route::resource('assistant','AssistantController');
Route::resource('client','ClientController');

Route::resource('terre','TerreController');
Route::resource('appartement','AppartementController');

Route::resource('villa','VillaController');
Route::resource('myByOffer','OfferUserController');


Route::patch('/offer/{offer}/accepter','OfferController@accepter')->name('offer.accepter');
Route::patch('/offer/{offer}/rejeter','OfferController@rejeter')->name('offer.rejeter');

Route::get('/likeed/{user}/get','OfferController@likeed')->name('offer.likeed');
Route::get('/createdbyme/{user}/get','OfferController@createdbyme')->name('offer.createdbyme');

//Route::get('/createdbyme/{user}/get','OfferController@createdbyme')->name('offer.createdbyme');

