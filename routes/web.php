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

Route::get('/', 'PublicPageController@index');
Route::get('event-detail', 'PublicPageController@eventDetail');
Route::get('event-list', 'PublicPageController@eventList');
// Route::get('event-book', 'PublicPageController@eventBook');
Route::get('create-event', 'CreateEventController@createEventForm');
Route::post('create-event', 'CreateEventController@createEvent');
// Route::get('eventDetails/{id}','PublicPageController@eventDetails');

Route::get('event-book', 'BookingController@ticketBooking');
Route::post('ticket-booking', 'BookingController@createBooking');



/*Route::group(
	[
		'namespace' => 'Attendee',
		'prefix' => 'attendee',
	],
	function() {

		Route::get('/', 'PublicPageController@index');
		Route::get('event-detail', 'PublicPageController@eventDetail');
		Route::get('event-list', 'PublicPageController@eventList');
		Route::get('event-book', 'PublicPageController@eventBook');
	}
);*/


Auth::routes();

Route:: group(
	[
		'namespace' => 'Events',
		'prefix' => 'events',
	],
	function (){

		Route::get('eventDetails/{id}', 'EventsController@fullSingleEventDetails');
	}
);



