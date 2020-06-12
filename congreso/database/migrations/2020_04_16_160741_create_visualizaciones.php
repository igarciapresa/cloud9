<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visualizaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_ponencia');
            $table->timestamps();
        });
    }
//Relaciones de las tablas
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visualizaciones');
    }
}
