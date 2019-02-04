<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name');
            $table->string('event_address');
            $table->string('event_venue-name');
            $table->string('event_category');
            $table->string('event_detail');
            $table->string('event_started_at');
            $table->string('event_ended_at');
            $table->string('organizer_name');
            $table->string('organizer_email');
            $table->string('organizer_contact_number');
            $table->string('organizer_detail');
            $table->string('ticket_name');
            $table->string('ticket_number');
            $table->string('ticket_max_number');
            $table->string('ticket_min_number');
            $table->string('ticket_category');
            $table->string('ticket_expiry_date');
            $table->string('ticket_cover');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
