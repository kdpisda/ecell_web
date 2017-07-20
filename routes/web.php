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

Route::get('/events/{id}','EventsController@show');
Route::get('/events/get_event_detail/{id}','EventsController@get_event_detail');
Route::get('/events/update_event', 'EventsController@update')->name('update_event');

//Route::middleware('auth_panel')->group(function () {

Route::get('/home', 'HomeController@aindex')->name('home');

// Route::get('/admin_panel', 'HomeController@admin_panel')->name('admin_panel');

Route::get('/coordinator_panel', 'HomeController@coordinator_panel')->name('coordinator_panel');

Route::get('/manager_panel', 'HomeController@manager_panel')->name('manager_panel');

Route::get('/executive_panel', 'HomeController@executive_panel')->name('executive_panel');

Route::get('/ambassador_panel', 'HomeController@ambassador_panel')->name('ambassador_panel');

Route::get('/wp_testing','WptestingController@index')->name('wp-testing');

//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/admin/events','AdminController@events')->name('admin_events');