<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas',function(Blueprint $table){

            $table->increments('id');
            $table->date('fecha_inicio_servicio');
            $table->time('hora_inicio_servicio');
            $table->string('origen',100);
            $table->string('destino',100);
            $table->integer('user_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('conductor_id')->unsigned();

            
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            
            
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
        //
    }
}
