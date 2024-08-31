<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');

            $table->string('image');
            $table->string('gender');
            $table->string('digital_signature_image');

            $table->string('passport_image');
            $table->string('nid_image');
            $table->string('certification_image');

            $table->date('dob');
            $table->string('mothers_name');
            $table->string('mothers_nid')->unique();
            $table->string('mothers_profession');
            $table->string('mothers_gross_income');
            $table->string('fathers_name');
            $table->string('fathers_profession');
            $table->string('fathers_gross_income');
            $table->string('contact_address');
            $table->string('permanent_address');
            $table->string('phone_number');
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
        Schema::dropIfExists('personal_forms');
    }
}
