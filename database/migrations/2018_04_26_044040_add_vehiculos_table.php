<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function(Blueprint $table){

            $table->increments('id');
            $table->enum('type',['zapatico','duster','limosina','camioneta'])->default('zapatico');
            $table->string('placa',6);
            $table->string('tarjeta_operacion',100);
            $table->string('soat',100);
            $table->string('licencia_transito',100);
            $table->string('seguro_contractual',100);
            $table->string('seguro_extra_contractual',100);
            $table->string('tecnomecanica',100);
            $table->string('seguro_riesgos',100);
            $table->string('url_foto_1',255);
            $table->string('url_foto_2',255);
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
