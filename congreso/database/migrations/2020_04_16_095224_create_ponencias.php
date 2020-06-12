<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponencias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('user_id');
            $table->string('descripcion');
            $table->string('url');
            $table->timestamps();
        });
    }
//Relaciones entre las tablas
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ponencias');
    }
}
