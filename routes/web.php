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
    return redirect ('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/myevents/deleteEvent/{event_id}', 'EventController@delete_event');

Route::get('/deleteGuest/{guest_id}/{event_id}', 'GuestController@delete_guest');

Route::get('/myevents/editEvent/{event_id}', 'EventController@edit_event');

Route::get('/myevents/registry/{event_id}', 'EventController@registry');

Route::post('/myevents/editEvent/{event_id}', 'EventController@update_event');

Route::get('/myevents/createnewevent', 'EventController@create_event');

Route::post('/myevents/savenewevent', 'EventController@save_event');

Route::post('/{event_code}/guestlog', 'GuestController@create_guest');

Route::get('/{event_code}/register', 'EventController@display');

Route::get('/rsvp/{event_code}', 'EventController@rsvp');

Route::get('/{event_code}/login', 'EventController@login');

Route::post('/{event_id}/rsvp', 'GuestController@rsvp');

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

Route::get('/myevents', 'EventController@show_events');

Route::get('/{event_code}', 'EventController@login');
