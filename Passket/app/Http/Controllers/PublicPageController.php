<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
		return view('pages.frontend.pages.event-list');
	}
	
}
