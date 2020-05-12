<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoorOpeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('door_openings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('electronic_card_id')->nullable();
            $table->string('lugar');
            $table->date('fecha_apertura');
            $table->time('hora_apertura');
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
        Schema::dropIfExists('door_openings');
    }
}
