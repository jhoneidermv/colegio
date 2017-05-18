<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



/**
*clase User
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class User extends Authenticatable
{
    
    protected $table='administrador';
    protected $primaryKey='idAdministrador';

    public $timestamps=false;
    protected $fillable=['username','password'];
}
