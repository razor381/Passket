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

// Route::get('/','Attendee\PublicPageController@index');

Route::group(
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
);