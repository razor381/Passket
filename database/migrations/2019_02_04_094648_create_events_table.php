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
            $table->string('event_category')->nullable;
            $table->string('event_detail');
            $table->string('event_started_at');
            $table->string('event_ends_at');
            $table->string('organizer_name');
            $table->string('organizer_email');
            $table->string('organizer_contact_number');
            $table->string('organizer_detail');
            $table->string('ticket_name');
            $table->string('ticket_number')->nullable;
            $table->string('ticket_max_number')->nullable;
            $table->string('ticket_min_number');
            $table->string('ticket_category')->nullable;
            $table->string('ticket_expiry_date')->nullable;
            $table->string('ticket_cover')->nullable;
            $table->boolean('is_active')->default(true);
            $table->string('remarks')->nullable;
            $table->integet('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
