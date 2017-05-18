<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use PDF;
use DB;


/**
*clase PdfController
*@autor jhon jaime ramirez cortes -lucerito Alarcon
*/
class PdfController extends Controller
{

/**
*permite crear una vista
*@param object $request 
*@return pdf
*/
public function htmltopdfview(Request $request)
    {
      $empleados = Empleado::all();
    $view =  \View::make("probarPDF", compact('empleado', 'empleados'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reporte');
}



/**
*busca un empleado en la bd
*@param integer $idEmpleado
*@return String vista de informacion
*/
public function pdf_empleado($idEmple)
{
$user=DB::table('Empleado')
->join('grado', 'grado.idGrado', '=', 'empleado.Grado_idGrado')
->select('empleado.documento','empleado.nombre','empleado.apellido', 'empleado.nacionalidad', 'empleado.telefono','empleado.correo','empleado.direccion','empleado.fechaNacimiento','empleado.estudiosRealizados','empleado.nivel','empleado.cargo','empleado.lugarEstudios','empleado.tiempoTrabajo','empleado.fechaIngresoTrabajo','empleado.valorNomina','empleado.estadoCivil','empleado.fechaNacimiento','grado.grado')
->where('idEmpleado',$idEmple)
->first();

  $headers = array(
              'Content-Type: application/pdf',
            );

     $pdf = PDF::loadView('pdfvista',['user' => $user]);

$pdf->setPaper('A4', 'portrait');

return $pdf->download('ResumenInformacion.pdf',$headers);

}

/**
*busca un estudiante en la bd
*@param integer $idEstudiante
*@return String vista de informacion del Estudiante
*/

public function pdf_estudiante($idEstu)
{
$user=DB::table('estudiante')
->join('grado', 'grado.idGrado', '=', 'estudiante.idGrado')
->join('acudiente', 'idAcudiente', '=', 'estudiante.Acudiente_idAcudiente')
->select('estudiante.nombre','estudiante.apellido','estudiante.fechaNac', 'estudiante.documento', 'estudiante.expedicion','estudiante.telefono','estudiante.celular','estudiante.direccion','estudiante.peso','estudiante.tipoSangre','estudiante.anioActual','estudiante.condicion','estudiante.religion','grado.grado','acudiente.documentoPadre','acudiente.nombrePadre','acudiente.nombremadre','acudiente.apellidoMadre','acudiente.apellidoPadre','acudiente.documentoMadre','acudiente.ocupacionPadre','acudiente.ocupacionMadre','acudiente.celularPadre','acudiente.celularMadre','acudiente.correoMadre','acudiente.correoPadre','acudiente.estadoCivil','acudiente.nombreAcu','acudiente.documentoAcu','acudiente.celularAcu','acudiente.ocupacion','acudiente.correoAcu','acudiente.parentesco')
->where('idEstudiante',$idEstu)
->first();

$headers = array(
              'Content-Type: application/pdf',
            );
     $pdf = PDF::loadView('pdfvistaEstudiante',['user' => $user]);
return $pdf->download('ResumenInformacionEstudiante.pdf',$headers);

}

/**
*crea un reporte de un Empleado en un recibo pdf
*@param integer $tipo si es para descargar o ver online 
*@param object $request informacion del empleado
*@return String vista de informacion  del pdf
*/
public function crear_reporte($tipo,Request $request)
{


  $headers = array(
              'Content-Type: application/pdf',
            );

$pdf = PDF::loadView('pdfvistaReciboEmpleado',['user' => $request]);

$pdf->setPaper('A4', 'portrait');

if($tipo==1)
{
return $pdf->stream();
}
else
{
return $pdf->download('Recibo.pdf',$headers);
}
}

/**
*crea un reporte de un Estudiante en un recibo pdf
*@param integer $tipo si es para descargar o ver online 
*@param object $request informacion del empleado
*@return String vista de informacion del Estudiante recibo
*/
public function crear_reporteEstudiante($tipo,Request $request)
{


 $headers = array(
              'Content-Type: application/pdf',
            );

$pdf = PDF::loadView('pdfvistaReciboEstudiante',['user' => $request]);

$pdf->setPaper('A4', 'portrait');

if($tipo==1)
{
return $pdf->stream();
}
else
{
return $pdf->download('ReciboEstudiante.pdf',$headers);
}


}



}
