<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('year_id');
            $table->string('year_name')->nullable();
            $table->unsignedBigInteger('subject_id');
            $table->string('subject_name')->nullable();
            $table->timestamps();

            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('year_subjects');
    }
}
