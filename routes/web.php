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

// Route::resource('login', 'LoginController');

Route::resource('signup', 'SignupController');
Route::get('/profile','HomeController@my_profile')->name('my_pofile');

Route::get('/events/ES2k1700{id}','EventsController@show');
Route::get('/events/get_event_detail/{id}','EventsController@getEventDetail');
Route::post('/events/update_event', 'EventsController@update')->name('update_event');
Route::get('/events/approve_event/{id}','EventsController@approveEvent');
Route::get('/events/unapprove_event/{id}','EventsController@unapproveEvent');
Route::get('/events/get_events_list','EventsController@getEventsList');

Route::get('/sponsors/SPONS00{id}','SponsorsController@show');
Route::get('/sponsors/get_sponsor_detail/{id}','SponsorsController@getSponsorDetail');
Route::post('/sponsors/update_sponsor', 'SponsorsController@update')->name('update_sponsor');
Route::get('/sponsors/approve_sponsor/{id}','SponsorsController@approveSponsor');
Route::get('/sponsors/unapprove_sponsor/{id}','SponsorsController@unapproveSponsor');
Route::get('/sponsors/get_sponsors_list','SponsorsController@getSponsorsList');

Route::get('/startups/STRTUP00{id}','StartupsController@show');
Route::get('/startups/get_startup_detail/{id}','StartupsController@getStartupDetail');
Route::post('/startups/update_startup', 'StartupsController@update')->name('updateStartup');
Route::get('/startups/approve_startup/{id}','StartupsController@approveStartup');
Route::get('/startups/unapprove_startup/{id}','StartupsController@unapproveStartup');
Route::get('/startups/get_startups_list','StartupsController@getStartupsList');

Route::get('/speakers/SPKR00{id}','SpeakersController@show');
Route::get('/speakers/get_speaker_detail/{id}','SpeakersController@getSpeakerDetail');
Route::post('/speakers/update_speaker', 'SpeakersController@update')->name('updateSpeaker');
Route::get('/speakers/approve_speaker/{id}','SpeakersController@approveSpeaker');
Route::get('/speakers/unapprove_speaker/{id}','SpeakersController@unapproveSpeaker');
Route::get('/speakers/get_speakers_list','SpeakersController@getSpeakersList');

Route::get('/questionSets/approve_question_set/{id}','QuestionSetsController@approveQuestionSet');
Route::get('/questionSets/unapprove_question_set/{id}','QuestionSetsController@unapproveQuestionSet');
Route::get('/questionSets/get_question_set_detail/{id}','QuestionSetsController@getQuestionSetDetail');
Route::get('/questionSets/get_question_sets_list','QuestionSetsController@getQuestionSetsList');

Route::get('/questions/get_question_detail/{id}','QuestionsController@getQuestionsDetail');
Route::get('/questions/get_questions_list','QuestionsController@getQuestionsList');
Route::get('/questions/unapprove_question/{id}','QuestionsController@unapproveQuestion');
Route::get('/questions/approve_question/{id}','QuestionsController@approveQuestion');

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
Route::get('/admin/questionSets','AdminController@questionSets')->name('admin_question_sets');
Route::get('/admin/questions','AdminController@questions')->name('admin_questions');
Route::post('/admin/sendotp','AdminController@sendotp')->name('sendotp');
Route::get('/blogs/get_blogs_list','BlogsController@getBlogsList')->name('blogs_list');
Route::get('/pages/get_pages_list','PagesController@getPagesList')->name('pages_list');

Route::resource('startups', 'StartupsController');

Route::resource('sponsors', 'SponsorsController');

Route::resource('events', 'EventsController');

Route::resource('speakers','SpeakersController');

Route::resource('questionSets','QuestionSetsController');

Route::resource('questions','QuestionsController');

Route::group(['prefix' => 'blogsadmin'], function () {
    Voyager::routes();
});
