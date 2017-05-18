   
<head>
  {!! Html::style('css/bootstrap.min.css') !!}
  {!! Html::style('css/datepicker3.css') !!}
  {!! Html::style('css/styles.css') !!}

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
</head>
<div class="container">
   <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Actualizar Datos Estudiante</h1>
            </div>
        </div><!--/.row-->
 <div class="row">
     <div class="col-md-6">
     {!! Form::model($estudiante,['route' => 'estudiante/update', 'class' => 'form-horizontal','method' => 'put', 'novalidate']) !!}

     {!! Form::hidden('id', $estudiante->idEstudiante) !!}

     <div class="form-group">
      {!! Form::label('nombre', 'Nombre',['class' => 'col-lg-2 control-label']) !!}
      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('fechaNac', 'Fecha de Nacimiento') !!}
      {!! Form::text('fechaNac', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('documento', 'Documento') !!}
      {!! Form::text('documento', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

  
    <div class="form-group">
      {!! Form::label('expedicion', 'Expedición') !!}
      {!! Form::text('expedicion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('telefono', 'Telefono') !!}
      {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('celular', 'Celular') !!}
      {!! Form::text('celular', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('direccion', 'Dirección') !!}
      {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('peso', 'Peso') !!}
      {!! Form::text('peso', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('tipoSangre', 'Tipo de Sangre') !!}
      {!! Form::text('tipoSangre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('anioActual', 'Año Actual') !!}
      {!! Form::text('anioActual', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('condicion', 'Condición') !!}
      {!! Form::text('condicion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
   
    
<div class="form-group">

{!! Form::label('grados', 'Grado Actualmente') !!}
{!! Form::text('grado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
{!! Form::label('gr', 'Seleccione de nuevo el grado acontinuacion') !!}
{{ Form::select('grado', ['PREJARDIN','JARDIN','TRANSICION','1A','1B','1C','2A','2B','2C','3A','3B','3C','4A','4B','4C','5A','5B','5C'],null, ['id' => 'grado','class' => 'form-control']) }}

  </div>
    <div class="form-group">
      {!! Form::label('religion', 'Religión') !!}
      {!! Form::text('religion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('documentoPadre', 'Documento Padre') !!}
      {!! Form::text('documentoPadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('nombrePadre', 'Nombre Padre ') !!}
      {!! Form::text('nombrePadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('nombremadre', 'Nombre Madre ') !!}
      {!! Form::text('nombremadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('apellidoMadre', 'Apellido Madre ') !!}
      {!! Form::text('apellidoMadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('apellidoPadre', 'Apellido Padre ') !!}
      {!! Form::text('apellidoPadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('documentoMadre', 'Documento Madre ') !!}
      {!! Form::text('documentoMadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('ocupacionPadre', 'Ocupación Padre ') !!}
      {!! Form::text('ocupacionPadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('celularPadre', 'Celular Padre ') !!}
      {!! Form::text('celularPadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

<div class="form-group">
      {!! Form::label('celularMadre', 'Celular Madre ') !!}
      {!! Form::text('celularMadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('correoMadre', 'Correo Madre ') !!}
      {!! Form::text('correoMadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('correoPadre', 'Correo Padre ') !!}
      {!! Form::text('correoPadre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>


    <div class="form-group">
      {!! Form::label('EstadoCivil', 'Estado Civil') !!}
      <div class="radio">
        {!! Form::label('madre_soltera', 'Madre Soltera') !!}
         {{ Form::radio('estadoCivil', 'madre_soltera' , true) }}
     </div>
     <div class="radio">
        {!! Form::label('divorciado', 'Divorciado') !!}
          {{ Form::radio('estadoCivil', 'divorciado' , true) }}   
   </div>
   <div class="radio">
      {!! Form::label('casado', 'Casado') !!}
     {{ Form::radio('estadoCivil', 'casado' , true) }}
  </div>
  <div class="radio">
    {!! Form::label('viudo', 'Viudo') !!}  
 {{ Form::radio('estadoCivil', 'viudo' , true) }}
  </div>
  <div class="radio">
    {!! Form::label('solter@', 'Solter@') !!}    
   {{ Form::radio('estadoCivil', 'solter@' , true) }}
  </div>
</div>

<div class="form-group">
      {!! Form::label('nombreAcu', 'Nombre Acudiente') !!}
      {!! Form::text('nombreAcu', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('documentoAcu', 'Documento Acudiente ') !!}
      {!! Form::text('documentoAcu', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

<div class="form-group">
      {!! Form::label('celularAcu', 'Celular Acudiente ') !!}
      {!! Form::text('celularAcu', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::label('ocupacion', 'Ocupación Acudiente ') !!}
      {!! Form::text('ocupacion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

<div class="form-group">
      {!! Form::label('correoAcu', 'Correo Acudiente ') !!}
      {!! Form::text('correoAcu', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

<div class="form-group">
      {!! Form::label('parentesco', 'Parentesco ') !!}
      {!! Form::text('parentesco', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
<div class="form-group">
      {!! Form::text('idAcudiente', null, ['class' => 'form-control' , 'required' => 'required','readonly'=>'readonly']) !!}
    </div>
<div class="form-group">
      {!! Form::text('idEstudiante', null, ['class' => 'form-control' , 'required' => 'required','readonly'=>'readonly']) !!}
    </div>


<div class="form-group">
  {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
</div>


{!! Form::close() !!}
</div>
</div>
</div>
