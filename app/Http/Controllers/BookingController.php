<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticketbooking;
use App\Event;
use App\ticket_table;
use App\ticket_category;

class BookingController extends Controller
{
    public function ticketBooking() {
    	return view('pages.frontend.pages.event-book');
    }

    public function createBooking(Request $request) {
       $createBooking = Ticketbooking::create(
                   [
                       'name' => $request->name,
                       'address' => $request->address,
                       'email' => $request->email,
                       'mobile' => $request->mobile,
                       'ticket_category' => $request->ticket_category,
                       'ticket_number' => $request->ticket_number,
                       'user_id' => 1,
                       'event_id' => 10,
                   ]
       );

       if($createBooking) {
           return redirect('/');
       }
       return redirect()->back()->with('error', 'Error in booking ticket');


   	}


}
