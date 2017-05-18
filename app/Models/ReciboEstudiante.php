<?php

namespace App\Models;
use PDF;
use DB;
use DateTime;

use Illuminate\Database\Eloquent\Model;



/**
*clase ReciboNomina
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class ReciboEstudiante extends Model
{
    

/**
*funcion que permite registrar un recibo en la bd
*@param  object $request contiene los datos a registrar.
*@param int $idEstudiante id del empleado que se le hizo el recibo
*@param int $idGrado id del grado al que pertenece el estdudiante que se le hizo el recibo
*@return void
*/
   public static function  registrar($request,$idEstudiante,$idGrado)
    {
    
    
    //convertimos  a tipo date
$date = new DateTime($request->fecha);
$idTipo=1;

if($request->tipo=="mensualidad")
{
$idTipo=2;
}


DB::table('reciboestudiante')->insert(array(
          'TipoPago_idTipoPago' => $idTipo,
          'idEstudiante'=>$idEstudiante,
          'idGrado' => $idGrado,
          'valorPago'=>$request->valorMens,
          'pagoAdicional' =>$request->valorExtraordinario,
          'descripcion' =>$request->Observaciones,
          'totalPago'=>$request->total,
          'mes_a_pagar'=>$request->mes,
          'fecha'=>$date->format('Y-m-d') 
             )); 


    }
}
