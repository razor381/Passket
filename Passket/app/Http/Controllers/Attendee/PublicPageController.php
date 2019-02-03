<?php

namespace App\Http\Controllers\Attendee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicPageController extends Controller
{
	public function index() {
		return view('pages.frontend.pages.index');
	}

	public function eventDetail() {
		return view('pages.frontend.pages.event-detail');
	}

	public function eventBook() {
		return view('pages.frontend.pages.event-book');
	}

	public function eventList() {
		return view('pages.frontend.pages.event-list');
	}
}
