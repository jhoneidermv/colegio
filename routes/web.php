<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/login', function () {
    return view('welcome');
});
*/
Route::get('/home',function(){
	 return view('menu');
});

Route::get('/welcome', function () {
    return view('welcome');
});
//para poder ver el login
Route::get('/','Auth\LoginController@showLogin');
Route::get('/login','Auth\LoginController@showLogin');
//para poder logearse
Route::post('/logear','Auth\LoginController@postLogin');
//para poder cerrar sesion
Route::get('/salir','Auth\LoginController@logout');

//grupo privado
Route::group(['middleware'=>'auth'],function(){

Route::get('/pdf', function () {
    return view('probarPDf');
});

Route::get('/menu',function(){
	 return view('menu');
});

Route::get('/reciboEmpleado',function(){
	 return view('reciboEmpleado');
});
Route::get('/alertas',function(){
	 return view('alertas');
});

Route::get('/listadoGrado',function(){
	 return view('listadoGrado');
});

//lista empleado
Route::get('/listadoEmpleado', ['as' => 'listadoEmpleado', 'uses' => 'RegisterEmpleadoController@index']);

//lista Grado
Route::get('/listadoGrado', ['as' => 'listadoGrado', 'uses' => 'RegisterEstudianteController@index']);



Route::get('/envioEmail','AlertasController@basic_email');

//para enviar correo
Route::post('/correo','AlertasController@post');




//registrar un administrador
Route::post('/registrar','Auth\RegisterController@postRegistrar');

Route::get('/registroUsuario',function(){
	 return view('registroUsuario');
});


//registrar un empleado
Route::post('/registrarEmpleado','RegisterEmpleadoController@postRegistrar');

Route::get('/registroEmpleado',function(){
	 return view('registroEmpleado');
});

// registra estudiante
Route::post('/registrarEstudiante','RegisterEstudianteController@postRegistrar');

Route::get('/registroEstudiante',function(){
	 return view('registroEstudiante');
});
/////////////////////////////////////////




//para generar el pdf
Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'PdfController@htmltopdfview'));

// generar el pdf de un empleado
Route::get('/hojavida/{id}','PdfController@pdf_empleado');


/*rutas que permitiran el manejo de gestion de los empleados*/
Route::post('empleado/update', ['as' => 'empleado/update', 'uses'=>'RegisterEmpleadoController@update']);
Route::get('empleado/edit/{id}', ['as' => 'empleado/edit', 'uses'=>'RegisterEmpleadoController@edit']);
Route::get('empleado/destroy/{id}', ['as' => 'empleado/destroy', 'uses'=>'RegisterEmpleadoController@destroy']);
Route::post('empleado/search', ['as' => 'empleado/search', 'uses'=>'RegisterEmpleadoController@search']);

/*rutas que permitiran el manejo de gestion de los estudiantes*/
Route::get('/hojaEstudiante/{id}','PdfController@pdf_estudiante');
Route::put('estudiante/update', ['as' => 'estudiante/update', 'uses'=>'RegisterEstudianteController@update']);
Route::get('estudiante/edit/{id}', ['as' => 'estudiante/edit', 'uses'=>'RegisterEstudianteController@edit']);
Route::get('estudiante/destroy/{id}', ['as' => 'estudiante/destroy', 'uses'=>'RegisterEstudianteController@destroy']);
//para buscar un estudiante
Route::post('/buscarEstudiante','RegisterEstudianteController@search');


/*rutas para manejas la gestion de recibo del estudiante*/
Route::post('/registrarReciboEstudiante','ReciboEstudianteController@registrar');
Route::get('/reciboEstudiante',['as'=>'ReciboEstudiante','uses'=>'ReciboEstudianteController@index']);
//para buscar un estudiante para el recibo
Route::post('/buscarEstudianteRecibo','ReciboEstudianteController@search');
//para el pdf del estudiante via online o descargar
Route::post('vistaEstudiante/{tipo}', 'PdfController@crear_reporteEstudiante');


/*rutas para manejar la gestion de recibo empleado*/
Route::post('/registrarNominaEmpleado','ReciboNominaController@registrar');
Route::get('/reciboEmpleado',['as'=>'reciboEmpleado','uses'=>'ReciboNominaController@index']);
//para buscar un empleado para el recibo
Route::post('/buscarEmpleadoRecibo','ReciboNominaController@search');
//para el pdf del empleado via online o descargar
Route::post('vista/{tipo}', 'PdfController@crear_reporte');


/*rutas para calcular el total en el anio*/
Route::get('/totalColegio',['as'=>'totalColegio','uses'=>'totalAnioController@index']);
Route::post('/registarTotalAnioColegio', 'totalAnioController@registrarAnioTotal');
Route::post('calcularAnioColegio', 'totalAnioController@calcularTotalAnio');


/*rutas para calcular el total en el mes*/
Route::get('/totalColegioMes',['as'=>'totalColegioMes','uses'=>'totalMesController@index']);
Route::post('/registarTotalMesColegio', 'totalMesController@registrarMesTotal');
Route::post('calcularMesColegio', 'totalMesController@calcularTotalMes');





});//cierra grupo
