<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DB;
use Auth;


/**
*clase totalAnio
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class totalAnio extends Model
{

protected $table = 'totalanio';
   
protected $primaryKey = 'idtotalAnio';



/**
*Crea un registro total anio en la bd
*@param array $data  de datos del anio
*
*/
    public static function registrarDatos($datos)
    {  


//convertimos  a tipo date
$date = new DateTime($datos->fecha);

$anio=explode('-',$datos->fecha);

   
    	DB::table('totalanio')->insert(array(
            'anio' => $anio[2],
            'fechaGeneracion'=> $date->format('Y-m-d'),
         	'idAdministrador' => Auth::idAdministrador(),
            'totalAniocol'=> $datos->total
        )); 
	
    }



}
