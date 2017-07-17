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

// Route::resource('login', 'LoginController');

Route::resource('signup', 'SignupController');

Auth::routes();

Route::get('/profile','HomeController@my_profile')->name('my_pofile');

//Route::middleware('auth_panel')->group(function () {

	Route::get('/home', 'HomeController@admin_panel')->name('home');

	Route::get('/admin_panel', 'HomeController@admin_panel')->name('admin_panel');

	Route::get('/coordinator_panel', 'HomeController@coordinator_panel')->name('coordinator_panel');

	Route::get('/manager_panel', 'HomeController@manager_panel')->name('manager_panel');

	Route::get('/executive_panel', 'HomeController@executive_panel')->name('executive_panel');

	Route::get('/ambassador_panel', 'HomeController@ambassador_panel')->name('ambassador_panel');

//});
