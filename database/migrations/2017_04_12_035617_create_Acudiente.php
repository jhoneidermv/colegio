<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Acudiente', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idAcudiente');
            $table->string('documentoPadre', 45)->nullable();
            $table->string('nombrePadre', 45)->nullable();
            $table->string('nombremadre', 45)->nullable();
            $table->integer('documentoMadre')->nullable();
            $table->string('apellidoMadre',45)->nullable();
            $table->string('apellidoPadre',45)->nullable();
            $table->string('ocupacionPadre', 45)->nullable();
            $table->string('ocupacionMadre', 45)->nullable();
            $table->string('celularPadre',45)->nullable();
            $table->string('celularMadre',45)->nullable();
            $table->string('correoMadre', 45)->nullable();
            $table->string('correoPadre', 45)->nullable();
            $table->string('estadoCivil', 45)->nullable();
            $table->string('nombreAcu', 45)->nullable();
            $table->string('documentoAcu', 45)->nullable();
            $table->string('celularAcu',45)->nullable();
            $table->string('ocupacion', 45)->nullable();
            $table->string('correoAcu', 45)->nullable();
            $table->string('parentesco', 45)->nullable();
        
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
            Schema::drop('Acudiente');
    }
}
