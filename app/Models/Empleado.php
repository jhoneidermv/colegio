<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use Input;
use DB;



/**
*clase Empleado
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class Empleado extends Model
{


 protected $table = 'empleado';
 protected $primaryKey='idEmpleado';


      public function empleado()
      {
        return $this->hasOne('App\Models\Empleado');
      }

/**
*Crea un empleado en la bd
*@param array $data  de datos del registroEmpleado
*@return void
*/
	public static function crearEmpleado($data)
	{ 

$documento=$data['documento'];
$nombre=$data['nombre'];
$apellido=$data['apellido'];
$nacionalidad=$data['nacionalidad'];
$telefono=$data['telefono'];
$correo=$data['correo'];
$direccion=$data['direccion'];
$fechaNacimiento=$data['fechaNacimiento'];
$date = new DateTime($fechaNacimiento);

$estudiosRealizados=$data['estudiosRealizados'];
$nivel=$data['nivel'];
$cargo=$data['cargo'];
$lugarEstudios=$data['lugarEstudios'];
$tiempoTrabajo=$data['tiempoTrabajo'];
$fechaIngresoTrabajo=$data['fechaIngresoTrabajo'];
$date2 = new DateTime($fechaIngresoTrabajo);

$valorNomina=$data['valorNomina'];
$estadoCivil=$data['estadoCivil'];
$Grado_idGrado=$data['Grado_idGrado'];


if ($Grado_idGrado=="no_tiene")
{
DB::table('Empleado')->insert(array(
          'documento' => $documento,
            'nombre'=> $nombre,
         	'apellido' => $apellido,
            'nacionalidad'=> $nacionalidad,
        	'telefono' => $telefono,
            'correo'=> $correo,
        	'direccion' => $direccion,
            'fechaNacimiento'=> $date,
			'estudiosRealizados' => $estudiosRealizados,
            'nivel'=> $nivel,
        	'cargo' => $cargo,
            'lugarEstudios'=> $lugarEstudios,
			'tiempoTrabajo' => $tiempoTrabajo,
            'fechaIngresoTrabajo'=> $date2,
        	'valorNomina' => $valorNomina,
            'estadoCivil'=> $estadoCivil            		           
        )); 
}
else
{	

DB::table('Empleado')->insert(array(
          'documento' => $documento,
            'nombre'=> $nombre,
         	'apellido' => $apellido,
            'nacionalidad'=> $nacionalidad,
        	'telefono' => $telefono,
            'correo'=> $correo,
        	'direccion' => $direccion,
            'fechaNacimiento'=> $date,
			'estudiosRealizados' => $estudiosRealizados,
            'nivel'=> $nivel,
        	'cargo' => $cargo,
            'lugarEstudios'=> $lugarEstudios,
			'tiempoTrabajo' => $tiempoTrabajo,
            'fechaIngresoTrabajo'=> $date2,
        	'valorNomina' => $valorNomina,
            'estadoCivil'=> $estadoCivil,
            'Grado_idGrado'=>$Grado_idGrado     
        )); 
	
}//else

	}//function

/**
*Crea un empleado en la bd
*@param object $request array de datos del Empleado
*@return void
*/
public static function updateEmpleado($request)
{
$empleado = Empleado::find($request->id);
 
$empleado->documento = $request->documento;
$empleado->nombre = $request->nombre;
$empleado->apellido = $request->apellido;
$empleado->nacionalidad = $request->nacionalidad;
$empleado->telefono = $request->telefono;
$empleado->correo = $request->correo;
$empleado->direccion = $request->direccion;
$empleado->fechaNacimiento = $request->fechaNacimiento;
$empleado->estudiosRealizados = $request->estudiosRealizados;
$empleado->nivel = $request->nivel;
$empleado->lugarEstudios = $request->lugarEstudios;
$empleado->cargo = $request->cargo;


if($request->grado!="no_tiene")
{
  $empleado->Grado_idGrado = $request->grado+1;
}

$empleado->tiempoTrabajo = $request->tiempoTrabajo;
$empleado->fechaIngresoTrabajo = $request->fechaIngresoTrabajo;
$empleado->valorNomina = $request->valorNomina;
$empleado->estadoCivil = $request->estadoCivil;
 
 $empleado->save();

}

/**
*Elimina un empleado de la bd
*@param integer $idEmpleado id del empleado a eliminar
*@return void
*/
public static function destroyEmpleado($idEmple)
{

  $empleado =  Empleado::find($idEmple);
        $empleado->delete();
   
}

/**
*Busca un empleado de la bd
*@param array $userdata del empleado a buscar
*@return object $empleado devulve el grado al que pertenece el empleado
*/
public static function nameRecibo($userdata)
{

$nombre=$userdata['nombre'];


 if(trim($nombre)!="")
{
$empleado = DB::table('Empleado')
      ->join('grado', 'grado.idGrado', '=', 'Empleado.Grado_idGrado')            
      ->select('grado.grado')
      ->Where(DB::raw("CONCAT(empleado.nombre,' ', empleado.apellido)"),'LIKE' ,"%".$nombre."%")  
      ->get();
}
 
 return $empleado;
}

   

}
