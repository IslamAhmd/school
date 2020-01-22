<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('year_id');
            $table->string('year_name')->nullable();
            $table->unsignedBigInteger('level_id');
            $table->string('level_name')->nullable();
            $table->timestamps();

            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('year_levels');
    }
}
