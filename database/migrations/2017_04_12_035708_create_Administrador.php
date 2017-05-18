<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   
Schema::create('Administrador', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idAdministrador');
            $table->string('nombre', 45)->nullable();
            $table->string('apellidos', 45)->nullable();
            $table->integer('password')->nullable();
            $table->string('telefono', 45)->nullable();
            $table->string('correo', 45)->nullable();
            $table->string('username', 45)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('documento', 45)->nullable();
            
            $table->rememberToken();
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
        Schema::drop('Administrador');
    }
}
