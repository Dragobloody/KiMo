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


Route::get('/home','HomeController@create')->name('home')->middleware('guest');
Route::get('/contact','HomeController@contact')->name('contact')->middleware('guest');

Route::get('/signup','RegistrationController@create')->name('signup')->middleware('guest');
Route::post('/signup','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login')->middleware('guest');
Route::post('/login','SessionsController@store');
Route::post('/addkid','SessionsController@addkid');
Route::post('/addgroup','SessionsController@addgroup');
Route::post('/updateProfile','SessionsController@updateProfile');
Route::get('/logout','SessionsController@destroy')->name('logout');

Route::get('/main','SessionsController@index')->name('main')->middleware('auth');
Route::get('/profile','SessionsController@profile')->name('profile')->middleware('auth');

Route::get('/maps','SessionsController@maps')->name('maps');

Route::get('/map', function(){
    return view('sessions.frontmap');
});



