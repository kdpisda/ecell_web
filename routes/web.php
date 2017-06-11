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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('startups', 'StartupController');

Route::resource('sponsors', 'SponsorController');

Route::resource('events', 'EventsController');

Route::resource('login', 'LoginController');

Route::resource('signup', 'SignupController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
