<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'id',
    	'event_name',
    	'event_address',
    	'event_venue_name',
    	'event_category',
    	'event_detail',
    	'event_started_at',
    	'event_ends_at',
    	'organizer_name',
    	'organizer_email',
    	'organizer_contact_number',
    	'organizer_detail',
    	'remarks',
    	'user_id',
    	'is_active',
    	'event_id',
    ];

    protected $hidden = [
    	
    	
    ];

}
