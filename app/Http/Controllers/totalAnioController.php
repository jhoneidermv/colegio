<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\totalAnio;
use DB;



/**
*clase totalAnioController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class totalAnioController extends Controller
{

protected $table = 'totalanio';
   
protected $primaryKey = 'idtotalAnio';


    public function index()
    {
$now = new \DateTime();


$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']='vacio';
$sistemas['totalEstudiante']='vacio';
$sistemas['totalEmpleado']='vacio';
                                
      return view('totalColegio',['sistemas' => $sistemas]);
    }

/**
*clase que permite calcular el anio
*@return string totalanio
*/
public function calcularTotalAnio()
{

 $pagoEstudiante=DB::table('reciboestudiante')
            ->select('reciboestudiante.totalPago')
            ->get();
$sumapagoEstudiante=0;

foreach ($pagoEstudiante as $valor)
{
$sumapagoEstudiante+=$valor->totalPago;
}

 $pagoEmpleado=DB::table('recibonomina')
            ->select('recibonomina.totalPago')
            ->get();

$sumapagoEmpleado=0;

foreach ($pagoEmpleado as $valor2)
{
$sumapagoEmpleado+=$valor2->totalPago;
}



$resultado=$sumapagoEstudiante-$sumapagoEmpleado;

$now = new\DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']=$resultado;
$sistemas['totalEstudiante']=$sumapagoEstudiante;
$sistemas['totalEmpleado']=$sumapagoEmpleado;
                                
      return view('totalColegio',['sistemas' => $sistemas]);


}

/**
*clase que permite calcular el anio
*@param object $request datos
*@return string total
*/
    public function registrarAnioTotal(Request $request)
    {
    
totalAnio::registrarDatos($request);
$now = new \DateTime();

$sistemas['fecha']= $now->format('d-m-Y');
$sistemas['totalAnio']="registrado";
$sistemas['totalEstudiante']='registrado';
$sistemas['totalEmpleado']='registrado';
                                
      return view('totalColegio',['sistemas' => $sistemas]);

    }
}
