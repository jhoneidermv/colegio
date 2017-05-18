<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciboNomina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReciboNomina', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idReciboNomina');
            $table->integer('idDocente')->unsigned();
            $table->dateTime('fecha')->nullable();
            $table->integer('mes_a_Pagar')->nullable();
            $table->double('totalPago',15,8)->nullable();
            $table->double('descuentos',15,8)->nullable();
            $table->integer('bonos')->nullable();
            $table->string('observaciones', 45)->nullable();
        
            $table->index('idDocente','fk_ReciboNomina_Docente1_idx');
        
            $table->foreign('idDocente')
                ->references('idEmpleado')->on('Empleado');
        
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
        Schema::drop('ReciboNomina');
    }
}
