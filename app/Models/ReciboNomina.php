<?php

namespace App\Models;
use DateTime;
use DB;
use Illuminate\Database\Eloquent\Model;


/**
*clase ReciboNomina
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class ReciboNomina extends Model
{
protected $table = 'recibonomina';
protected $primaryKey='idReciboNomina';


/**
*funcion que permite registrar un recibo en la bd
*@param  object $datos contiene los datos a registrar.
*@param int $idEmpleado id del empleado que se le hizo el recibo
*@return void
*/
    public static function registrar($datos,$idEmpleado)
    {

//convertimos  a tipo date
$date = new DateTime($datos->fecha);


DB::table('recibonomina')->insert(array(
           'idDocente' => $idEmpleado,
            'fecha'=> $date->format('Y-m-d'),
         	'mes_a_Pagar' => $datos->mes,
            'totalPago'=> $datos->total,
        	'descuentos' => $datos->valorDescuento,
            'bonos'=> $datos->valorAdicional,
        	'observaciones' =>$datos->Observaciones
             )); 
    }
}
