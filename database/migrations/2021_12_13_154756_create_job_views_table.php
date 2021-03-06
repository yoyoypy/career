<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jobvacancy_id');
            $table->string('url')->nullable();
            $table->string('session_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('agent')->nullable();

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
        Schema::dropIfExists('job_views');
    }
}
