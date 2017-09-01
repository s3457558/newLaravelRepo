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


Route::get('/', 'PagesController@home');                                //home page
//Route::get('booking', 'BookingController@create');                      //booking
Route::get('about', 'AboutPageController@create');                      //about us page
Route::get('location','LocationController@create');                     // location page
Route::get('price','PriceController@create');                           // price page


Route::get('login',
    ['as' => 'login', 'uses' =>  'LoginPageController@create']);        // link to login in page
Route::post('login',
    ['as' => 'login_system', 'uses' => 'LoginPageController@create']);



Route::get('booking.create',
    ['as' => 'booking.create', 'uses' =>   'BookingController@create']);
Route::get('car.create',
    ['as' => 'car.create', 'uses' =>   'CarController@create']);


Route::get('register',
    ['as' => 'register', 'uses' =>   'RegisterPageController@create']);                // link to register page
Route::post('register',
    ['as' => 'register_system', 'uses' => 'RegisterPageController@doRegister']);

Route::get('contact',                                                   // link to contact
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);


Route::get('thankyou', function () {
    return view('booking.thankyou');    /*like receipt*/
})->name('thankyou');



Route::resource('car', 'CarController');
Route::resource('booking', 'BookingController');


Route::resource('admin', 'AdminController'); /*adminBooking_view*/

Route::resource('adminUser', 'AdminUserController'); /*adminUser_view*/
