<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPcyhotestUrl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('interview', function (Blueprint $table) {
            $table->dropColumn('url');
            $table->string('psychotest_1')->after('title')->nullable();
            $table->string('psychotest_2')->after('psychotest_1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interview', function (Blueprint $table) {
            $table->string('url')->after('title')->nullable();
            $table->dropColumn('psychotest_1');
            $table->dropColumn('psychotest_2');
        });
    }
}
