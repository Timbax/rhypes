<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDisponibilidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad', function(Blueprint $table){

            $table->increments('id');
            $table->datetime('fecha_inicio_servicio');
            $table->string('ciudad',100);
            $table->string('numero_pasajeros',5);
            $table->string('origen',100);
            $table->string('destino',100);
            $table->integer('user_id')->unsigned();
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('conductor_id')->unsigned();

            $table->enum('type',['disponibilidad','contratacion_hora'])->default('disponibilidad');

            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');
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
