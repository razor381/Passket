<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\ticket_table;
use App\ticket_category;

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

     /*   $this->validate($request, 
            [
                'event_name' => 'required|string',
                'event_address' => 'required|string',
                'event_venue_name' => 'required|string',
                'event_started_at' => 'required',
                'event_ends_at' => 'required',
                'organizer_name' => 'required|string',
                'organizer_email' => 'required|email',
                'organizer_detail' => 'required|string',
            ]
        );*/

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $ext = $photo->getClientOriginalExtension();
            $photoName = time().'.'.$ext;

            if($photo->move(public_path('images/'),$photoName)) {

            }else {
                echo 'error';
            }

        }


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

            ]
        );

        $createTicket = ticket_table::create(
            [
                'total_number' => $request->ticket_total_number,
                'category' => $request->ticket_category,
                'expiry_date' => $request->ticket_expiry_date,
                'photo' => isset($photoName) ? $photoName: '',
                'QR_code' => 'qr code',
                'user_id' => auth()->user()->id,
                'event_id' => $createEvent->id,
            ]
        );

        $ticketCategory = ticket_category::create(
            [
                'category' => 'gold',
                'price' => 2000,
                'event_id' => $createEvent->id,
            ]
        );

        if($createEvent && $createTicket && $ticketCategory) {
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
