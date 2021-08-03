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
            $table->bigIncrements('id');
            $table->integer('jobvacancy_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('pob');
            $table->string('sex');
            $table->string('education');
            $table->longtext('id_card_address');
            $table->longtext('present_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('id_card_number');
            $table->string('marital_status');
            $table->string('cv');
            $table->string('status')->default('new');
            $table->timestamps();
            $table->ipAddress('visitor')->default(null);
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
