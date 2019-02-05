<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket_category extends Model
{
    protected $fillable = [
    	'id',
    	'category',
    	'price',
    	'is_active',
    	'remarks',
    	'event_id',
    ];
}
