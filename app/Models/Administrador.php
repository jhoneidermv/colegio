<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Input;
use DB;


/**
*clase Administrador
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class Administrador extends Model
{
   

protected $table="Administrador";

    /**
     * Get the totalMes  record associated with the user.
     */
    public function totalMes()
    {
        return $this->hasOne(totalMes::class);
    }

	/**
     * Get the  totalAnio associated with the user.
     */
    public function totalAnio()
    {
        return $this->hasOne(totalAnio::class);
    }

/**
*crea un administrador
*@param  object $data datos del administrador
*@return void
*
*/
public static function crearAdministrador($data)
{ 
$documento=$data['documento'];
$nombre=$data['nombre'];
$apellido=$data['apellido'];
$contrasena=$data['password'];
$telefono=$data['telefono'];
$usuario=$data['username'];
$direccion=$data['direccion'];
$correo=$data['correo'];

DB::table('Administrador')->insert(array(
           'documento'=>$documento, 
          'nombre'=> $nombre,
            'apellidos'=> $apellido,
            'password'=> \Hash::make($contrasena),
            'telefono' => $telefono,
            'correo' => $correo,
            'username' => $usuario,
            'direccion'=>$direccion            
        )); 

}

}
