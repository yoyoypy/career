<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobvacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobsvacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('jobtitle');
            $table->longText('jobdescription');
            $table->string('joblocation_id');
            $table->string('jobcategory_id');
            $table->longText('benefit');
            $table->string('company_id');
            $table->integer('position');
            $table->string('employment');
            $table->string('salary');
            $table->date('start');
            $table->date('end');
            $table->string('status');
            //$table->string('metatitle');
            //$table->longText('metadescription');
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
        Schema::dropIfExists('failed_jobs');
    }
}
