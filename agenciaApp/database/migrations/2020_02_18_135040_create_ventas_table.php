<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('venta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idpaquete')->unsigned();
            $table->bigInteger('iduser')->unsigned();
            $table->decimal('precio',8,2);
            $table->date('fecha');
            $table->integer('pax');
            $table->timestamps();
            
            $table->foreign('idpaquete')->references('id')->on('paquete');
            $table->foreign('iduser')->references('id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
