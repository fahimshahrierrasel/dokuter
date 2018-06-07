<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marital_status', 20);
            $table->unsignedInteger('pUUID');
            $table->foreign('pUUID')->references('patientUUID')->on('patient_users');
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
        Schema::dropIfExists('patient_infos');
    }
}
