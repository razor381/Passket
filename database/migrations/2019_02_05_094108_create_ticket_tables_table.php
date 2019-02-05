<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('total_number')->nullable();
            $table->string('category')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('photo')->nullable();
            $table->string('QR_code')->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('remarks')->nullable();
            $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
            $table->integer('event_id')->unsigned();
            // $table->foreign('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('ticket_tables');
    }
}
