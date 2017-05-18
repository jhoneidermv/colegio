<?php

use Illuminate\Database\Seeder;
use App\Models\Administrador;


class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//insertamos un administrador
DB::table('Administrador')->insert(array(
          'documento'=>'12345',
          'nombre'=> 'elmer',
            'apellidos'=> 'alarcon',
            'password'=> \Hash::make('12345'),
            'telefono' => '3103661957',
            'correo' => 'elmer.47@hotmail.com',
			'username' => 'elmer41',
			'direccion'=>'carrera 52 # 49- 61 Sevilla (Valle del Cauca)'			
        )); 

    }
}
