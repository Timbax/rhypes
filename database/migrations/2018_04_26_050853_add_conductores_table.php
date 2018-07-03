<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function(Blueprint $table){

            $table->increments('id');
            $table->string('nombre',100);
            $table->string('apellidos',200);
            $table->string('cedula',100)->unique();
            $table->string('licencia_conduccion',100);
            $table->string('seguridad_social',100);
            $table->string('certificacion_bancaria',200);
            $table->string('rut',100);
            $table->string('hoja_vida',100);
            $table->string('email',100)->unique();
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
