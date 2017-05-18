<?php

use Illuminate\Database\Seeder;
use Faker\Provider\en_US\Person;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\Internet;
use Faker\Factory as Faker;


class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $date = new DateTime('2017-04-14');


      $faker = Faker::create();


      for ($i=0; $i < 5; $i++) {


//insertamos datos en la tabla de acudiente

        DB::table('Acudiente')->insert(array(
          'documentoPadre'=>$faker->randomElement(['789','1234','31245','1345','1335']),
          'nombrePadre'=>$faker->name,
          'nombremadre'=>$faker->firstNameFemale,
          'apellidoMadre'=>$faker->firstNameFemale,
          'apellidoPadre'=>$faker->randomElement(['ramirez','gaona','alarcon','rodriguez','romero']),
          'documentoMadre'=>$faker->randomElement(['789','1234','31245','1345','1335']),
          'ocupacionPadre'=>'oficios varios',
          'ocupacionMadre'=>'ama de casa',
          'celularPadre'=>$faker->e164PhoneNumber,
          'celularMadre'=>$faker->e164PhoneNumber,
          'correoMadre'=>$faker->email,
          'correoPadre'=>$faker->email,
          'estadoCivil'=>$faker->randomElement(['casado','divorciado','viud@']),
          'nombreAcu'=>$faker->firstNameFemale,
          'documentoAcu'=>$faker->randomElement(['789','1234','31245','1345','1335']),
          'celularAcu'=>$faker->e164PhoneNumber,
          'ocupacion'=>'ama de casa',
          'correoAcu'=>$faker->email,
          'parentesco'=>'tia'        
          ));

}

  for ($i=0; $i < 5; $i++) {
//insertamos datos en la tabla estudiante
        DB::table('Estudiante')->insert(array(
          'documento'=>$faker->randomElement(['789','1234','31245','1345','1335','no tiene']),
          'nombre'=>$faker->randomElement(['luis','maria','alejandro','camilo','claudia']) ,
          'apellido'=> $faker->randomElement(['davila','perez','villanueva','aristabal','gaona']) ,
          'fechaNac'=>$faker->dateTime,
          'expedicion'=>$faker->randomElement(['12/09/2009','11/05/2010','21/07/2011','12/09/2010','no tiene']),
          'telefono'=>$faker->randomElement(['78993477','78993477','no tiene','783524567','1335']),
          'celular'=>$faker->randomElement(['3162953628','314232346','no tiene','3215678123']),
          'direccion'=>$faker->randomElement(['a 44-81.Cl. 56 #4443, Sevilla','Cra. 49 #5273, Sevilla, Valle del Cauca','#50-43 a, Cra. 50 #50107, Sevilla, Valle del Cauca','Kr 48 50, Sevilla, Valle del Cauca','Cra. 49 #53 - 51, Sevilla, Valle del Cauca']),
          'peso'=>32.4,
          'tipoSangre'=>$faker->randomElement(['A+','B+','O-','A-']),
          'anioActual'=>'2017',
          'condicion'=>'ninguna',
          'religion'=>$faker->randomElement(['catolico','cristiano']),
          'idGrado'=>$i+2,
          'Acudiente_idAcudiente'=>32   		
          ));

}//for

    }//clases


  
}
