<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTotalAnio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totalAnio', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idtotalAnio');
            $table->string('anio',45)->nullable();
            $table->dateTime('fechaGeneracion')->nullable();
            $table->integer('idAdministrador');
            $table->double('totalAniocol',16,8)->nullable();
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
                Schema::drop('totalAnio');

    }
}
