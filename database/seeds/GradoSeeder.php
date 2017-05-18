<?php

use Illuminate\Database\Seeder;

class GradoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

$array = array("PREJARDIN","JARDIN","TRANSICION","1A","1B","1C","2A","2B","2C","3A","3B","3C","4A","4B","4C","5A","5B","5C");
//insertamos datos en la tabla de grado
foreach ($array as &$valor) {
    	DB::table('Grado')->insert(array(
          'grado'=>$valor
        )); 
	}//for each

     }
}
