<?php

namespace App\Http\Controllers\Auth;

use App\Models\Administrador;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use Input;
/**
*clase Registercontroller
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

 

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

/**
*registrar datos del admin
*@return  string direccion registroDireccion
*
*/   
public function postRegistrar()
{

  $userdata = array(
            'documento' => Input::get('documento'),
            'nombre'=> Input::get('nombre'),
         'apellido' => Input::get('apellido'),
            'password'=> Input::get('contrasena'),
        'telefono' => Input::get('telefono'),
            'username'=> Input::get('usuario'),
        'direccion' => Input::get('direccion'),
            'correo'=> Input::get('correo')       
        );
Administrador::crearAdministrador($userdata);
return Redirect::to('registroUsuario')->with('success','Registro Exitoso');
}


}
