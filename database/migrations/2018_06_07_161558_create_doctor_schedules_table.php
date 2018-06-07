<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day_of_week');
            $table->time('from_time');
            $table->time('to_time');
            $table->integer('doc_id');
            $table->integer('chamber_id');
            $table->foreign('doc_id')->references('id')->on('doctors');
            $table->foreign('chamber_id')->references('id')->on('doctor_chambers');
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
        Schema::dropIfExists('doctor_schedules');
    }
}
