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
                <h1 class="page-header">Actualizar Datos Empleado</h1>
            </div>
        </div><!--/.row-->
 <div class="row">
     <div class="col-md-6">
     {!! Form::model($empleado,['route' => 'empleado/update', 'class' => 'form-horizontal','method' => 'post', 'novalidate']) !!}

     {!! Form::hidden('id', $empleado->idEmpleado) !!}

     <div class="form-group">
      {!! Form::label('documento', 'Documento',['class' => 'col-lg-2 control-label']) !!}
      {!! Form::text('documento', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('nombre', 'Nombre') !!}
      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('apellido', 'Apellido') !!}
      {!! Form::text('apellido', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('nacionalidad', 'Nacionalidad') !!}
      {!! Form::text('nacionalidad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

  
    <div class="form-group">
      {!! Form::label('telefono', 'Telefono') !!}
      {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('correo', 'Correo') !!}
      {!! Form::text('correo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('direccion', 'Dirección') !!}
      {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('fechaNacimiento', 'fechaNacimiento') !!}
      {!! Form::text('fechaNacimiento', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('estudiosRealizados', 'Estudios Realizados') !!}
      {!! Form::text('estudiosRealizados', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('nivel', 'Nivel') !!}
      {!! Form::text('nivel', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('lugarEstudios', 'Lugar Estudios') !!}
      {!! Form::text('lugarEstudios', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('cargo', 'Cargo') !!}
      {!! Form::text('cargo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
   
    
<div class="form-group">

{!! Form::label('grados', 'Grado Actualmente') !!}
{!! Form::text('grado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
{!! Form::label('gr', 'Seleccione de nuevo el grado acontinuacion') !!}
{{ Form::select('grado', ['PREJARDIN','JARDIN','TRANSICION','1A','1B','1C','2A','2B','2C','3A','3B','3C','4A','4B','4C','5A','5B','5C'],null, ['id' => 'grado','class' => 'form-control']) }}

  </div>
    <div class="form-group">
      {!! Form::label('tiempoTrabajo', 'Tiempo Trabajo') !!}
      {!! Form::text('tiempoTrabajo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('fechaIngresoTrabajo', 'Fecha Ingreso') !!}
      {!! Form::text('fechaIngresoTrabajo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('valorNomina', 'Valor Nomina') !!}
      {!! Form::text('valorNomina', null, ['class' => 'form-control' , 'required' => 'required']) !!}
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
  {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
</div>


{!! Form::close() !!}
</div>
</div>
</div>
