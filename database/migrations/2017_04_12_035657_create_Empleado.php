<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
    Schema::create('Empleado', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idEmpleado');
            $table->string('documento', 45)->nullable();
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->string('nacionalidad', 45)->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->string('estudiosRealizados', 45)->nullable();
            $table->string('nivel', 45)->nullable();
            $table->string('cargo', 45)->nullable();
            $table->string('lugarEstudios', 45)->nullable();
            $table->string('tiempoTrabajo', 45)->nullable();
            $table->date('fechaIngresoTrabajo')->nullable();
            $table->string('valorNomina', 45)->nullable();
            $table->string('estadoCivil', 45)->nullable();
            $table->string('foto', 45)->nullable();
            $table->integer('Grado_idGrado')->unsigned()->nullable();
        
            $table->index('Grado_idGrado','fk_Empleado_Grado1_idx');
        
            $table->foreign('Grado_idGrado')
                ->references('idGrado')->on('Grado');
        
            $table->timestamps();
            });



        }//class

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::drop('Empleado');
    }
}
