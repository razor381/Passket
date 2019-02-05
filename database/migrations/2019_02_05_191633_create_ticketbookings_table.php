<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketbookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketbookings', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('ticket_category')->nullable();
            $table->string('ticket_number');
            $table->integer('event_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('is_active')->default(true);
            // $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('ticketbookings');
    }
}
