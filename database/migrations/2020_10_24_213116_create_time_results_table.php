<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_results', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json("rolls")->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('time_results', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropIfExists();
        });
    }
}
