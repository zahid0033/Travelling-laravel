<?php

/**
      created by zahid Hossain
      Date: 07/12/2018
*/


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
    return view('Home.index');
});

//home-url
Route::get('/home','homeController@index')->name('home.index');

//hotel-url
Route::get('/hotel','hotelController@index')->name('hotel.index');
Route::post('/hotel','hotelController@search')->name('hotel.search');


Route::get('/hotel-profile','hotelController@show')->name('hotel.profile');
Route::get('/hotel-profile/{id}/edit','hotelController@edit')->name('hotel.edit');


//hotel-post-url
Route::get('/hotel-post','hotelPostController@index')->name('hotelPost.index');
Route::post('/hotel-post','hotelPostController@search')->name('hotelPost.search');


//book hotel
Route::get('/hotel-book/{id}/book','hotelPostController@book')->name('hotelPost.book');



//user -url
Route::get('/user-profile','userController@profile')->name('user.profile');


//login-url
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');

Route::get('/login-hotel','loginController@hotel')->name('login.hotel');
Route::post('/login-hotel','loginController@hotelVerify')->name('login.hotelVerify');

//signup -url
Route::get('/signup-user','signUpController@index')->name('signup.index');
Route::post('/signup-user','signUpController@store')->name('signup.store');

Route::get('/signup-hotel','signUpController@hotel')->name('signup.hotel');


//logout - url
Route::get('/logout','logoutController@index')->name('logout.index');