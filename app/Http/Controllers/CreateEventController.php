<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class CreateEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createEventForm() {
        return view('pages.frontend.pages.create-event');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  /*  public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createEvent(Request $request)
    {

        $createEvent = Event::create(
            [
                'event_name' => $request->event_name,
                'event_address' => $request->event_address,
                'event_venue_name' => $request->event_venue_name,
                'event_category' => $request->event_category,
                'event_detail' => $request->event_detail,
                'event_started_at' => $request->event_start_year,
                'event_ends_at' => $request->event_ends_year,
                'organizer_name' => $request->organizer_name,
                'organizer_email' => $request->organizer_email,
                'organizer_contact_number' => $request->organizer_contact_number,
                'organizer_detail' => $request->organizer_detail,
                'ticket_name' => $request->ticket_name,
                'ticket_number' => $request->ticket_number,
                'ticket_max_number' => $request->ticket_max_number,
                'ticket_min_number' => $request->ticket_min_number,
                'ticket_category' => $request->ticket_category,
                'ticket_expiry_date' => $request->ticket_expiry_year,
                'ticket_cover' => $request->ticket_cover,
                'user_id' => auth()->user()->id,
            ]
        );

        if($createEvent) {
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Error creating event');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
