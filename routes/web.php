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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

//Route::get('booking', 'BookingController@create');                      //booking

/*home page*/
Route::get('/', 'PagesController@home');                                //home page

/*upload license file page*/
Route::get('upload','FileController@upload');
Route::post('/handleUpload', 'FileController@handleUpload');

/*register page*/
Route::get('register',
    ['as' => 'register', 'uses' =>   'RegisterPageController@create']);
Route::post('register',
    ['as' => 'register_system', 'uses' => 'RegisterPageController@doRegister']);

/*login page*/
Route::get('login',
    ['as' => 'login', 'uses' =>  'LoginPageController@create']);
Route::post('login',
    ['as' => 'login', 'uses' =>  'LoginPageController@doLogin']);

/*logout page*/
Route::get('logout', function(){
    Auth::logout();
    return view('logout');
});

/*about page*/
Route::get('about', 'AboutPageController@create');

/*contact page*/
Route::get('contact',
    ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

/*location page*/
Route::get('location','LocationController@create');
Route::get('findCarName','LocationController@findCarName');

/*price page*/
Route::get('price','PriceController@create');

/*booking page*/
Route::resource('booking', 'BookingController');
Route::get('booking.create',
    ['as' => 'booking.create', 'uses' =>   'BookingController@create']);

/*receipt page*/
Route::get('thankyou', function () {
    return view('booking.thankyou');
})->name('thankyou');

/*customers history*/
Route::resource('record', 'RecordController');


/*customers return the car*/
Route::resource('return', 'ReturnController');


/*****************************Data management (admin page)**************************************/
/*admin access*/
Route::get('admin', ['middleware' => ['auth', 'admin'], function() {
    return view('admin.admin');
}]);

/*admin home page*/
Route::get('admin.home',
    ['as' => 'admin.home', 'uses' =>   'AdminHomeController@create']);


/*add car page*/
Route::resource('car', 'CarController');

Route::get('car.create',
    ['as' => 'car.create', 'uses' =>   'CarController@create']);

/*adminBooking_view*/
Route::resource('admin', 'AdminController');


/*adminUser_view*/
Route::resource('adminUser', 'AdminUserController');


/*adminCar_view*/
Route::resource('adminCar', 'AdminCarController');

/*adminLicense_view*/
//Route::get('adminLicense.license',
//    ['as' => 'adminLicense.license', 'uses' =>   'fileController@showall']);

Route::get('adminLicense.license', 'FileController@show');

//Route::get('license','FileController@showUpLoadForm')->name('upload.license');
//Route::post('license', 'FileController@storeFile');



//Route::get('license','AdminUserController@showFile');
//Route::post('/handleUpload',array('as'=>'storefile','uses'=>'FileController@storeFile'));
//Route::post('/handleUpload', 'FileController@handleUpload');

