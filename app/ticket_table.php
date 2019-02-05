<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket_table extends Model
{
    protected $fillable = [
    	'id',
    	'total_number',
    	'category',
    	'expiry_date',
    	'photo',
    	'QR_code',
    	'is_active',
    	'remarks',
    	'user_id',
    	'event_id'
    ];

    protected $hidden = [

    ];
}
