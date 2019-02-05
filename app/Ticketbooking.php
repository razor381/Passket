<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketbooking extends Model
{
    protected $fillable = [
    	'id',
    	'name',
    	'address',
    	'email',
    	'mobile',
    	'ticket_category',
    	'ticket_number',
    ];

    protected $hidden = [
    	
    	
    ];
}
