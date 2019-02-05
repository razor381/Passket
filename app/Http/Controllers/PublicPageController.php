<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PublicPageController extends Controller
{
    //function leads to index page entering the site
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
		$eventLists= Event::paginate(1);
		return view('pages.frontend.pages.event-list',compact('eventLists'));
	}

	public function createEvent() {
		return view('pages.frontend.pages.create-event');
	}

}
