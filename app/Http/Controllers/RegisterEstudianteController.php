<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Input;
use Redirect;
use DB;


/**
*clase RegisterEstudianteController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class RegisterEstudianteController extends Controller
{

/**
*devuelve datos a la vista listadoGrado
*@return  object $estudiante lista de grado 
*
*/
function index()
    {


           
 $estudiantes=DB::table('Estudiante')
            ->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')
            ->join('reciboestudiante', 'reciboestudiante.idEstudiante', '=', 'estudiante.idEstudiante')
            ->select('estudiante.idEstudiante','estudiante.documento','estudiante.nombre', 'estudiante.apellido','estudiante.celular','grado.grado','reciboestudiante.mes_a_pagar')
            ->get();

$array = array("ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE");

foreach ($estudiantes as $valor)
{
$valor->mes_a_pagar=$array[$valor->mes_a_pagar];
}



        return view('listadoGrado',['estudiantes' => $estudiantes]);
    }


/**
*Registra datos en la bd del estudiante
*@return  string redirecciona a la vista registroEmpleado 
*
*/ 
public function postRegistrar(Request $request)
{


  $userdata = array(
            'documento' => $request->documento,
            'nombre'=> $request->nombre,
         	'apellido' => $request->apellido,
            'fechaNac'=> $request->fechaNac,
        	'expedicion' => $request->expedicion,
            'telefono'=> $request->telefono,
        	'celular' => $request->celular,
            'direccion'=> $request->direccion,
			      'peso' => $request->peso,
            'tipoSangre'=> $request->tipoSangre,
        	'anioActual' => $request->anioActual,
            'condicion'=> $request->condicion,
			'religion' => $request->religion,
            'Grado'=> $request->grado,
            'Acudiente_idAcudiente'=> $request->documentoAcu        
        );

$acudientedata = array(
            'documentoPadre' => $request->documentoPadre,
            'nombrePadre'=> $request->nombrePadre,
         	'documentoMadre' => $request->documentomadre,
            'nombremadre'=> $request->nombremadre,
             'apellidoPadre'=> $request->apellidoPadre,
             'apellidoMadre'=> $request->apellidoMadre,
        	'ocupacionMadre' => $request->ocupacionMadre,
            'ocupacionPadre'=>$request->ocupacionPadre,
        	'celularPadre' => $request->celularPadre,
            'celularMadre'=>$request->celularMadre,
			'correoMadre' => $request->correoMadre,
            'correoPadre'=> $request->correoPadre,
        	'estadoCivil' => $request->estadoCivil,
            'nombreAcu'=> $request->nombreAcu,
			'documentoAcu' => $request->documentoAcu,
            'celularAcu'=> $request->celularAcu,
            'ocupacion'=> $request->ocupacion, 
          	'correoAcu'=> $request->correoAcu, 
          	'parentesco'=>$request->parentesco            
        );




Estudiante::crearEstudiante($userdata,$acudientedata);
return Redirect::to('registroEstudiante')->with('success','Registro Exitoso');
}

/**
*Edita datos en la bd del estudiante
*@param integer $idEstudiante a edita
*@return string redirecciona a la vista updateEstudiante
*
*/
public function edit($idEstu)
{

$estudiante=DB::table('estudiante')
->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')
->join('acudiente', 'idAcudiente', '=', 'estudiante.Acudiente_idAcudiente')
->select('estudiante.idEstudiante','estudiante.nombre','estudiante.apellido','estudiante.fechaNac', 'estudiante.documento', 'estudiante.expedicion','estudiante.telefono','estudiante.celular','estudiante.direccion','estudiante.peso','estudiante.tipoSangre','estudiante.anioActual','estudiante.condicion','estudiante.religion','grado.grado','acudiente.idAcudiente','acudiente.documentoPadre','acudiente.nombrePadre','acudiente.nombremadre','acudiente.apellidoMadre','acudiente.apellidoPadre','acudiente.documentoMadre','acudiente.ocupacionPadre','acudiente.ocupacionMadre','acudiente.celularPadre','acudiente.celularMadre','acudiente.correoMadre','acudiente.correoPadre','acudiente.estadoCivil','acudiente.nombreAcu','acudiente.documentoAcu','acudiente.celularAcu','acudiente.ocupacion','acudiente.correoAcu','acudiente.parentesco')
->where('idEstudiante',$idEstu)
->first();

                return \View::make('updateEstudiante',compact('estudiante'));
}
/**
*Actualiza datos en la bd del estudiante
*@param  object $request datos del estudiante
*@return string redirecciona a la vista listadoGrado 
*
*/
public function update(Request $request)
{

              Estudiante::updateEstudiante($request);

             return redirect('listadoGrado');
}


/**
*busca un estudiante en la bd
*@param $idEstudiante a eliminar
*@return String vista listadoGrado
*/
public function destroy($idEstu)
{
Estudiante::destroyEstudiante($idEstu);

                return redirect('listadoGrado');
}


/**
*busca un estudiante en la bd
*@param $request parametro que trae los datos
*@return object $estudiante datos de la bd del estudiante 
*/
public function search(Request $request)
{
  $userdata = array(
            'documento' => $request->grado,
            'nombre'=> $request->nombre,
            );
 $estudiantes=Estudiante::name($userdata);


    return view('listadoGrado',['estudiantes' => $estudiantes]);
         

}

}
