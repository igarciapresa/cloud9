<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salon', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 40)->unique();
            $table->integer('capacidad');
            $table->string('ubicacion')->unique();
            $table->timestamps();//Dos campos: updated y created
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salons');
    }
}
