<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Input;
use Auth;
use View;
/**
*clase Logincontroller
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/menu';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
    $this->middleware('guest', ['except' => 'logout']);
 // $this->middleware('auth');

    }
    


/**
*devuelve datos showlogin blade
*@return  string direccion lista
*
*/
    public function showLogin()
    {


        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/menu');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('/welcome');
    }



/**
*devuelve datos a la vista login blade
*@return  string direccion lista
*
*/
public function postLogin()
{
$username=Input::get('nombre');
$password=Input::get('contrasena');
$remember=Input::get('remember');

if(Auth::attempt(['username'=>$username,'password'=>$password],$remember))
{
    return redirect()->intended('/menu');
}

return Redirect::back()->with('error_message','datos Invalidos')->withInput();
}



/**
*cierra logout
*@return  string direccion login
*
*/
public function logout(){
Auth::logout();
     return Redirect::to('/login');
} 



}
