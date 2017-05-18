<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('TipoPago', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('idTipoPago');
            $table->string('TipoPago', 45)->nullable();
        
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
    Schema::drop('TipoPago');
    
    }
}
