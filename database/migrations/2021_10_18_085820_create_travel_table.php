<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('airlines_name');
            $table->string('ticket_number');
            $table->string('ticket_number_text');
            $table->string('ticket_purchased');
            $table->date('date_of_departure');
            $table->string('port_of_embarkation');
            $table->string('name_of_city');
            $table->date('date_of_arrival');
            $table->string('port_of_disembarkation');
            $table->string('name_of_city_2');
            $table->string('approximate_distance');
            $table->integer('user_id')->unique();
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
        Schema::dropIfExists('travel');
    }
}
