<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobvacancies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobvacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('jobtitle');
            $table->longText('jobdescription');
            $table->longText('jobrequirement');
            $table->string('joblocation_id');
            $table->string('jobcategory_id');
            $table->string('skill_id');
            $table->integer('position');
            $table->timestamps('start');
            $table->timestamps('end');
            $table->integer('status');
            //$table->string('metatitle');
            //$table->longText('metadescription');
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
