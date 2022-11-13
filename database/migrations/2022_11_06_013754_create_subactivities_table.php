<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subactivities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('activities')->onDelete('cascade');
            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->string('nombre');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subactivities');
    }
};
