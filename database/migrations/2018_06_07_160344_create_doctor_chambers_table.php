<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorChambersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_chambers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('location', 200);
            $table->string('gps_lat', 15);
            $table->string('gps_long', 15);
            $table->integer('doc_id');
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
        Schema::dropIfExists('doctor_chambers');
    }
}
