<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envios',function(Blueprint $table){

            $table->increments('id');
            $table->datetime('fecha_inicio_servicio');
            $table->string('ciudad',100);
            $table->string('origen',100);
            $table->string('destino',100);
            $table->string('descripcion_encomienda',255);
            
            $table->integer('vehiculo_id')->unsigned();
            $table->integer('conductor_id')->unsigned();

            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');



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
        
    }
}
