<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;

class EventsController extends Controller
{
    //function for full event detail
    public function fullSingleEventDetails($id){
        $singleEventDetails = Event::find($id);
        return view('pages.frontend.pages.events.event-detail',compact('singleEventDetails'));
    }
}
