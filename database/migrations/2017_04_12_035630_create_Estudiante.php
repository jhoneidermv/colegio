<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::create('Estudiante', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idEstudiante');
            $table->integer('idGrado')->unsigned();
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->date('fechaNac');
            $table->string('documento', 45)->nullable();
            //$table->string('correo', 45)->nullable();
            $table->string('expedicion', 45)->nullable();
            $table->string('telefono',45)->nullable();
            $table->string('celular',45)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->double('peso',5,3)->nullable();
            $table->string('tipoSangre', 45)->nullable();
            $table->string('anioActual',45)->nullable();
            $table->string('condicion', 45)->nullable();
            $table->string('religion', 45)->nullable();
            $table->string('foto', 100)->nullable();
            $table->integer('Acudiente_idAcudiente')->unsigned();
        
            $table->index('idGrado','fk_Estudiante_Grado1_idx');
            $table->index('Acudiente_idAcudiente','fk_Estudiante_Acudiente1_idx');
        
            $table->foreign('idGrado')
                ->references('idGrado')->on('Grado');
        
            $table->foreign('Acudiente_idAcudiente')
                ->references('idAcudiente')->on('Acudiente');
        
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
        Schema::drop('Estudiante');
    }
}
