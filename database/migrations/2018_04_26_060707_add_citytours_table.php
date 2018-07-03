<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCitytoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citytours',function(Blueprint $table){

            $table->increments('id');
            $table->datetime('fecha_inicio_servicio');
            $table->string('ciudad');
            $table->time('hora_inicio');
            $table->time('hora_final');
            $table->string('numero_pasajeros',5);
            $table->string('origen',100);
            $table->string('destino',100);
            $table->integer('user_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('conductor_id')->unsigned();


            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



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
