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


Route::get('/', 'PagesController@home');                                //home page
Route::get('booking', 'BookingController@create');                      //booking
Route::get('about', 'AboutPageController@create');                      //about us page

Route::get('login',
    ['as' => 'login', 'uses' =>  'LoginPageController@create']);        // link to login in page
Route::post('login',
    ['as' => 'login_system', 'uses' =>  'LoginPageController@create']);

Route::get('register',
    ['as' => 'register', 'uses' =>   'RegisterPageController@create']);                // link to register page
Route::post('register',
    ['as' => 'register_system', 'uses' => 'RegisterPageController@store']);

Route::get('contact',                                                   // link to contact
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);


Route::get('thankyou', function () {
    return view('booking.thankyou');
})->name('thankyou');

Route::resource('car', 'CarController');

Route::resource('booking', 'BookingController');