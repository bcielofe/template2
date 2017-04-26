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
Route::get('/myevents/createnewevent', 'EventController@create_event');

Route::post('/myevents/savenewevent', 'EventController@save_event');

Route::get('/{event_code}', 'EventController@display');

Route::post('/{event_code}/guestlog', 'GuestController@create_guest');

Route::get('/rsvp/{event_code}', 'EventController@rsvp');

Route::get('/{event_code}/login', 'EventController@login');

Route::post('/{event_code}/login', 'GuestController@login_guest');

Route::get('/guest', function () {
    return view('pages.guest_login');
});

Route::get('/custom', function () {
    return view('pages.customizable');
});

Route::get('/registry', function () {
    return view('pages.registry');
});

Route::get('/myevents', function () {
    return view('pages.events');
});

Route::get('/', function () {
    return view('pages.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
