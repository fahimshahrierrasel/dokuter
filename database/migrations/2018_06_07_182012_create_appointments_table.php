<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('appointment_date');
            $table->unsignedInteger('schedule_id');
            $table->unsignedInteger('pUser_id');
            $table->unsignedInteger('doc_id');
            $table->foreign('schedule_id')->references('id')->on('doctor_schedules');
            $table->foreign('pUser_id')->references('id')->on('patient_users');
            $table->foreign('doc_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('appointments');
    }
}
