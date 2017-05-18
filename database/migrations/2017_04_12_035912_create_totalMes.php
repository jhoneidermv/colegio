<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalMes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('totalMes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idtotalMes');
            $table->string('mes', 45)->nullable();
            $table->integer('idAdministrador')->unsigned();
            $table->string('fechaGenercion',45)->nullable();
            $table->double('totalMescol',15,8)->nullable();
        
            $table->index('idAdministrador','fk_totalMes_Administrador1_idx');
        
            $table->foreign('idAdministrador')
                ->references('idAdministrador')->on('Administrador');
        
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
        Schema::drop('totalMes');
    }
}
