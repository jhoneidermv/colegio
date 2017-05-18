<?php

namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Models\ReciboNomina;
use Illuminate\Http\Request;
use Input;
use DB;


/**
*clase ReciboNominaController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class ReciboNominaController extends Controller
{
 
/**
*funcion que permite enviar valores a la pagina reciboEmpleado
*@return array $sistemas datos extraidos de la bd
*/
function index()
{
$now = new \DateTime();
$recibo=DB::table('recibonomina')
		->select('idReciboNomina')
		->max('idReciboNomina');


$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['grado']='vacio';
$sistemas['nombre']='vacio';

$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;
 
      return view('reciboEmpleado',['sistemas' => $sistemas]);
}


/**
*busca un empleado en la bd
*@return array $sistemas datos de la bd del empleado grado
*/
function search()
{
$userdata = array(
            'nombre' => Input::get('nomEmpleado'),
            );

 $var=Empleado::nameRecibo($userdata);


$variable='no encontrado';
foreach ($var as $valor) {
$variable=$valor->grado;
}

$sistemas['grado']=$variable;
$sistemas['nombre']=$userdata['nombre'];


$now = new \DateTime();
$recibo=DB::table('recibonomina')
		->select('idReciboNomina')
		->max('idReciboNomina');

$sistemas['fecha']= $now->format('d-m-Y');


$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;

return view('reciboEmpleado',['sistemas' => $sistemas]);

}



/**
*funcion que permite registrar un recibo en la bd
*@return  object $pdf con la vista de los datos
*/
function registrar(Request $request)
{

$empleado = DB::table('Empleado')
      ->select('Empleado.idEmpleado')
      ->Where(DB::raw("CONCAT(empleado.nombre,' ', empleado.apellido)"),'LIKE' ,"%".$request->nombre."%")  
      ->get();

$idEmpleado=0;
foreach ($empleado as $valor) {
$idEmpleado=$valor->idEmpleado;
}

ReciboNomina::registrar($request,$idEmpleado);


$now = new \DateTime();
$recibo=DB::table('recibonomina')
    ->select('idReciboNomina')
    ->max('idReciboNomina');

$sistemas['fecha']= $now->format('d-m-Y');


$suma=1;

if(!is_null($recibo))
{
$suma=$recibo+1;
}

$sistemas['recibo']=$suma;
$sistemas['grado']="registrado";
$sistemas['nombre']="registrado";



return view('/reciboEmpleado',['sistemas' => $sistemas]);


}

}
