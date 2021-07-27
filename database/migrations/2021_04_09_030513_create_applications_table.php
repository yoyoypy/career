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
            //$table->string('fullname');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('pob');
            $table->string('sex');
            $table->string('education');
            //$table->integer('weight')->default(null);
            //$table->integer('height')->default(null);
            //$table->string('bloodtype');
            //$table->string('eye');
            $table->longtext('id_card_address');
            $table->longtext('present_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('id_card_number');
            //$table->string('tax_id_card_number')->default(null);
            //$table->string('social_security_number')->default(null);
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
