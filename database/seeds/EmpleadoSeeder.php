<?php

use Illuminate\Database\Seeder;

use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\Internet;
use Faker\Factory as Faker;



class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
	 $faker = Faker::create();

//insertamos datos en la tabla empleado


	for ($i=1; $i < 19; $i++) {

        DB::table('Empleado')->insert(array(
          'documento'=>$faker->randomElement(['123','445','321','124','555']),
          'nombre'=>$faker->randomElement(['jhon','pedro','andres','juan','martha']) ,
            'apellido'=> $faker->randomElement(['ramirez','gaona','alarcon','rodriguez','romero']) ,
            'nacionalidad'=> 'colombia',
            'telefono' => $faker->randomElement(['3162953628','323241234','301241234','320241234','311241234']),
            'correo' => $faker->email,
			'direccion' =>$faker->randomElement(['a 44-81.Cl. 56 #4443, Sevilla','Cra. 49 #5273','#50-43 a, Cra. 50','Kr 48 50, Sevilla','Cra. 49 #53 - 51']),
			'fechaNacimiento'=>$faker->dateTime,
			'estudiosRealizados' => $faker->randomElement(['pedagogia']),
            'nivel' => 'Universitario pregrado',
			'cargo' => 'profesor',
			'lugarEstudios'=>'Universidad santiago de cali',
			'tiempoTrabajo'=>$faker->randomElement(['2 años','sin experiencia','3 años','1 año']),
			'fechaIngresoTrabajo'=>$faker->dateTime,
			'valorNomina'=>1200000,
			'estadoCivil'=>$faker->randomElement(['casado','divorciado','solter@']),
			'Grado_idGrado'=>$i	
        )); 
    }//for




}//run

}
