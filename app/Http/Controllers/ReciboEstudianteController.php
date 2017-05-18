<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\ReciboEstudiante;
use Input;
use Redirect;
use DB;
use PDF;
use View;

/**
*clase ReciboEstudianteController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class ReciboEstudianteController extends Controller
{

/**
*funcion que permite enviar valores a la pagina reciboEstudiante
*@return array $sistemas datos extraidos de la bd
*/
function index()
{
$now = new \DateTime();
$recibo=DB::table('reciboEstudiante')
		->select('idREcibo')
		->max('idREcibo');


$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['grado']='vacio';
$sistemas['nombre']='vacio';

$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;
 
return View::make('reciboEstudiante')
          ->with('sistemas',$sistemas);




   
}



/**
*busca un estudiante en la bd
*@return array $sistemas datos de la bd del empleado grado
*/
function search()
{
$userdata = array(
            'nombre' => Input::get('nomEstudiante'),
            );
 
 

 $resultado=Estudiante::nameRecibo($userdata);


$grado='no encontrado';
foreach ($resultado as $valor) {
$grado=$valor->grado;
}


$now = new \DateTime();
$recibo=DB::table('reciboEstudiante')
		->select('idREcibo')
		->max('idREcibo');

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['grado']=$grado;
$sistemas['nombre']=$userdata['nombre'];

$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;


 
return View::make('reciboEstudiante')
          ->with('sistemas',$sistemas);

    


}


/**
*funcion que permite registrar un recibo en la bd
*@return  string ruta de la vista reciboEstudiante
*/
function registrar(Request $request)
{

 $estudiantes = DB::table('Estudiante')
      ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')            
      ->select('grado.idGrado','estudiante.idEstudiante')
      ->Where(DB::raw("CONCAT(estudiante.nombre,' ', estudiante.apellido)"),'LIKE' ,"%".$request->nombre."%")  
      ->get();

$idEstudiante=0;
$idGrado=0;

foreach ($estudiantes as $valor) {
$idEstudiante=$valor->idEstudiante;
$idGrado=$valor->idGrado;
}

ReciboEstudiante::registrar($request,$idEstudiante,$idGrado);


$now = new \DateTime();
$recibo=DB::table('reciboestudiante')
    ->select('idREcibo')
    ->max('idREcibo');


$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;
$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['grado']="registrado";
$sistemas['nombre']="registrado";



 
return View::make('reciboEstudiante')
          ->with('sistemas',$sistemas);


}

    
}
