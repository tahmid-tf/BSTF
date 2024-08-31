<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('username');
            $table->string('status')->default('pending');
            $table->string('applicant_unique_id');

            $table->string('acceptance_committee')->default('pending');
            $table->string('session_for_scholarship')->default('pending');
            $table->string('remarks')->default('pending');
            $table->string('digital_signature')->default('pending');
            $table->string('authorized_personnel')->default('pending');
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
        Schema::dropIfExists('applications');
    }
}
