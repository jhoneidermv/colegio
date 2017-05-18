<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use DB;
use Auth;

/**
*clase totalMes
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class totalMes extends Model
{
protected $table = 'totalanio';
   
protected $primaryKey = 'idtotalAnio';



/**
*crea un registro segun la informacion del mes
*@param array $data  de datos del registroEmpleado
*@return void
*/
    public static function registrarDatos($datos)
    {  


//convertimos  a tipo date
$date = new DateTime($datos->fecha);

$anio=explode('-',$datos->fecha);

   
    	DB::table('totalmes')->insert(array(
            'mes' => $anio[1],
            'idAdministrador'=>1,
            'fechaGenercion'=> $date->format('Y-m-d'),
         	'idAdministrador' => Auth::idAdministrador(),
            'totalMescol'=> $datos->total
        )); 
	
    }

    
}
