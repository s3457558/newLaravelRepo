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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'PagesController@home');
Route::get('booking', 'BookingController@create');
Route::get('about', 'AboutPageController@create');
Route::get('login', 'LoginPageController@create');
Route::get('register', 'RegisterPageController@create');



Route::get('contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);


Route::get('thankyou', function () {
    return view('booking.thankyou');
})->name('thankyou');

Route::resource('car', 'CarController');

Route::resource('booking', 'BookingController');