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

// Route::get('/', function () {
//     return view('welcome');
// });

//HomeController
Route::get('/','HomeController@index');
Route::get('/training-and-resources','HomeController@training');
Route::get('/zoompbr_booking','HomeController@zoom');
Route::get('/rd-and-above','HomeController@rd');
Route::get('/recognition','HomeController@recognition');
Route::get('/position-achiever-template','HomeController@template');
Route::get('/meeting-and-events','HomeController@meeting');
Route::get('/leaders','HomeController@leader');
Route::get('/about-us','HomeController@about');
Route::get('/contact-us','HomeController@contact');
Route::get('/our-gallery','HomeController@gallery');
Route::get('/shop','HomeController@shop');















