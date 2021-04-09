<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Application extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jobvacancy_id');
            //$table->integer('jobcategory_id');
            //$table->integer('joblocation_id');
            //$table->integer('company_id');
            $table->string('fullname');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('pob');
            $table->string('sex');
            $table->string('educations');
            $table->integer('weight');
            $table->integer('height');
            $table->string('bloodtype');
            $table->string('eye');
            $table->text('id_card_address');
            $table->text('present_address');
            $table->integer('phone_number', (13));
            $table->string('email');
            $table->integer('id_card_number', (16));
            $table->string('tax_id_card_number');
            $table->integer('social_security_number', (16));
            $table->string('marital_status');
            $table->file('cv');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
