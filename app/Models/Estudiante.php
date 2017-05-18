<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Acudiente;
use DateTime;
use Input;
use DB;


/**
*clase Estudiante
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class Estudiante extends Model
{

  protected $table = 'Estudiante';
   
protected $primaryKey = 'idEstudiante';    

/*
 *get estudiante
 *
 */
public function estudiante()
      {
        return $this->hasOne('App\Models\Estudiante');
      }

	/**
*Crea un estudiante en la bd
*@param array $data  de datos del registroEstudiante
*@param array $acudiente datos del acudiente
*@return void
*/
    public static function crearEstudiante($data,$acudiente)
	{ 


//insertamos el acudiente 

DB::table('acudiente')->insert(array(
           'documentoPadre' => $acudiente['documentoPadre'],
            'nombrePadre'=> $acudiente['nombrePadre'],
         	'documentoMadre' => $acudiente['documentoMadre'],
            'nombremadre'=> $acudiente['nombremadre'],
             'apellidoPadre'=> $acudiente['apellidoPadre'],
             'apellidoMadre'=> $acudiente['apellidoMadre'],
        	'ocupacionMadre' => $acudiente['ocupacionMadre'],
            'ocupacionPadre'=> $acudiente['ocupacionPadre'],
        	'celularPadre' => $acudiente['celularPadre'],
            'celularMadre'=> $acudiente['celularMadre'],
			'correoMadre' => $acudiente['correoMadre'],
            'correoPadre'=> $acudiente['correoPadre'],
        	'estadoCivil' => $acudiente['estadoCivil'],
            'nombreAcu'=> $acudiente['nombreAcu'],
			'documentoAcu' => $acudiente['documentoAcu'],
            'celularAcu'=> $acudiente['celularAcu'],
            'ocupacion'=> $acudiente['ocupacion'], 
          	'correoAcu'=> $acudiente['correoAcu'], 
          	'parentesco'=>$acudiente['parentesco']   
        )); 

//realizamos una consulta a la tabla para sacar el id del acudiente
$acudientes = DB::table('Acudiente')->get();
$posicion=1;
foreach ($acudientes as $acu) {    
    if($acu->documentoAcu==$acudiente['documentoAcu'] )
        $posicion=$acu->idAcudiente; 
}



$date = new DateTime($data['fechaNac']);



DB::table('Estudiante')->insert(array(
           'documento' => $data['documento'],
            'nombre'=> $data['nombre'],
         	'apellido' => $data['apellido'],
            'fechaNac'=> $date,
        	'expedicion' => $data['expedicion'],
            'telefono'=> $data['telefono'],
        	'celular' => $data['celular'],
            'direccion'=> $data['direccion'],
			'peso' => $data['peso'],
            'tipoSangre'=> $data['tipoSangre'],
        	'anioActual' => $data['anioActual'],
            'condicion'=> $data['condicion'],
			'religion' => $data['religion'],
            'idGrado'=> $data['Grado'],
            'Acudiente_idAcudiente'=>$posicion 
        )); 





	}//clase

/**
*actualiza los datos de un empleado
*@param object $request array de datos del Estudiante
*@return void
*/
public static function updateEstudiante($request)
{  

Acudiente::updateAcudiente($request);

$estudiante = Estudiante::find($request->idEstudiante);

$estudiante->idGrado =(int) $request->grado+1;
$estudiante->nombre = $request->nombre;
$estudiante->apellido =$request->apellido;
$estudiante->fechaNac =$request->fechaNac;
$estudiante->documento =$request->documento;
$estudiante->expedicion =$request->expedicion;
$estudiante->telefono =$request->telefono;
$estudiante->celular =$request->celular;
$estudiante->direccion =$request->direccion;
$estudiante->peso =$request->peso;
$estudiante->tipoSangre =$request->tipoSangre;
$estudiante->anioActual =$request->anioActual;
$estudiante->condicion =$request->condicion;
$estudiante->religion =$request->religion;

$estudiante->save();




}

/**
*Elimina un estudiante de la bd
*@param integer $idEstu id del empleado a eliminar
*@return void
*/
public static function destroyEstudiante($idEstu)
{
 $estudiante =  Estudiante::find($idEstu);
        $estudiante->delete();
}

/**
*busca un estudiante de la bd
*@param string $userdata nombre a buscar
*@return object $estudiantes
*/
public static function  name($userdata)
{

$nombre=$userdata['nombre'];
$grado=(int)$userdata['documento']+1;


  if(trim($nombre)!="")
{
$estudiantes = DB::table('Estudiante')
      ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')            
       ->join('reciboestudiante', 'reciboestudiante.idEstudiante', '=', 'estudiante.idEstudiante')
      ->select('estudiante.idEstudiante','estudiante.documento','estudiante.nombre', 'estudiante.apellido','estudiante.celular','grado.grado','reciboestudiante.mes_a_pagar')
      ->Where('estudiante.idGrado',$grado)
      ->Where(DB::raw("CONCAT(estudiante.nombre,' ', estudiante.apellido)"),'LIKE' ,"%".$nombre."%")  
      ->get();

            }
else
{
   $estudiantes=DB::table('Estudiante')
            ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')
              ->join('reciboestudiante', 'reciboestudiante.idEstudiante', '=', 'estudiante.idEstudiante')
            ->select('estudiante.idEstudiante','estudiante.documento','estudiante.nombre', 'estudiante.apellido','estudiante.celular','grado.grado','reciboestudiante.mes_a_pagar')
            ->get();
}
if($estudiantes->isEmpty())
{
  $estudiantes=DB::table('Estudiante')
            ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')
            ->join('reciboestudiante', 'reciboestudiante.idEstudiante', '=', 'estudiante.idEstudiante')
            ->select('estudiante.idEstudiante','estudiante.documento','estudiante.nombre', 'estudiante.apellido','estudiante.celular','grado.grado','reciboestudiante.mes_a_pagar')
            ->get();
}


$array = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

foreach ($estudiantes as $valor)
{
$valor->mes_a_pagar=$array[$valor->mes_a_pagar];
}


return $estudiantes;

}

/**
*busca un estudiante de la bd
*@param string $userdata nombre a buscar
*@return object $estudiantes
*/
public static function nameRecibo($userdata)
{
$nombre=$userdata['nombre'];


 if(trim($nombre)!="")
{
$estudiantes = DB::table('Estudiante')
      ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')            
      ->select('grado.grado')
      ->Where(DB::raw("CONCAT(estudiante.nombre,' ', estudiante.apellido)"),'LIKE' ,"%".$nombre."%")  
      ->get();
   }

            
return $estudiantes;

}//funcion recibo

}
