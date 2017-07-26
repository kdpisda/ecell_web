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

Route::get('/', 'HomeController@index');

Route::resource('startups', 'StartupsController');

Route::resource('sponsors', 'SponsorsController');

Route::resource('events', 'EventsController');

Route::resource('speakers','SpeakersController');

Route::get('/admin_beta','AdminBetaController@index');

// Route::resource('login', 'LoginController');

Route::resource('signup', 'SignupController');
Route::get('/profile','HomeController@my_profile')->name('my_pofile');

Route::get('/events/ES2k1700{id}','EventsController@show');
Route::get('/events/get_event_detail/{id}','EventsController@get_event_detail');
Route::get('/events/update_event', 'EventsController@update')->name('update_event');
Route::get('/events/approve_event/{id}','EventsController@approve_event');
Route::get('/events/unapprove_event/{id}','EventsController@unapprove_event');

Route::get('/sponsors/SPONS00{id}','SponsorsController@show');
Route::get('/sponsors/get_sponsor_detail/{id}','SponsorsController@get_sponsor_detail');
Route::get('/sponsors/update_sponsor', 'SponsorsController@update')->name('update_sponsor');
Route::get('/sponsors/approve_sponsor/{id}','SponsorsController@approve_sponsor');
Route::get('/sponsors/unapprove_sponsor/{id}','SponsorsController@unapprove_sponsor');

Route::get('/startups/SPONS00{id}','StartupsController@show');
Route::get('/startups/get_startup_detail/{id}','StartupsController@get_startup_detail');
Route::get('/startups/update_startup', 'StartupsController@update')->name('update_startup');
Route::get('/startups/approve_startup/{id}','StartupsController@approve_startup');
Route::get('/startups/unapprove_startup/{id}','StartupsController@unapprove_startup');

Route::get('/speakers/SPONS00{id}','SpeakersController@show');
Route::get('/speakers/get_speaker_detail/{id}','SpeakersController@get_speaker_detail');
Route::get('/speakers/update_speaker', 'SpeakersController@update')->name('update_speaker');
Route::get('/speakers/approve_speaker/{id}','SpeakersController@approve_speaker');
Route::get('/speakers/unapprove_speaker/{id}','SpeakersController@unapprove_speaker');

//Route::middleware('auth_panel')->group(function () {

Route::get('/home', 'HomeController@aindex')->name('home');

// Route::get('/admin_panel', 'HomeController@admin_panel')->name('admin_panel');

// Route::get('/coordinator_panel', 'HomeController@coordinator_panel')->name('coordinator_panel');

// Route::get('/manager_panel', 'HomeController@manager_panel')->name('manager_panel');

// Route::get('/executive_panel', 'HomeController@executive_panel')->name('executive_panel');

// Route::get('/ambassador_panel', 'HomeController@ambassador_panel')->name('ambassador_panel');

Route::get('/wp_testing','WptestingController@index')->name('wp-testing');

//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/events','AdminController@events')->name('admin_events');
Route::get('/admin/sponsors','AdminController@sponsors')->name('admin_sponsors');
Route::get('/admin/startups','AdminController@startups')->name('admin_startups');
Route::get('/admin/users','AdminController@users')->name('admin_users');
Route::get('/admin/speakers','AdminController@speakers')->name('admin_speakers');