<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Colegio Bello Horizonte</title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/datepicker3.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="./js/lumino.glyphs.js"></script>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function pruebaemail (){
    re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/

   var valor=document.getElementById('email').value;
    if(!re.exec(valor))
    {
        alert('correo no valido');
        return false;
    }else{
          return true;
    }
  

    }
     function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
 function validar(obj) {
  patron = /^\d{4}\-\d{2}\-\d{2}$/
 
  if(patron.test(obj.value)==false){
    alert('fecha no valida');
  return false;
  }
  else{
    return true;
  }
}
</script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><IMG style="position:absolute; left:0px; top:0px" SRC="./images/RECIBO2.png"  ><span>.......  Colegio Bello Horizonte...</span></a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{Auth::user()->nombre}} <span class="caret"></span></a>
                      
                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="/salir"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
                            
        </div><!-- /.container-fluid -->
    </nav>
        
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
       
        <ul class="nav menu">
            <li class="active"><a href="/menu"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-home"></use></svg> Inicio</a></li>

            <li><a href="/alertas"><svg class="glyph stroked calendar"><use xlink:href="#stroked-sound-on"></use></svg> Alertas</a></li>

            <li><a href="./registroEstudiante"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Registro Estudiante</a></li>

            <li><a href="./registroEmpleado"><svg class="glyph stroked app-window"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>Registro Empleado</a></li>

            <li><a href="./listadoGrado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas por Grados</a></li>

            <li><a href="./listadoEmpleado"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Listas de Empleados</a></li>

            <li><a href="./reciboEstudiante"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Estudiante</a></li>

            <li><a href="./reciboEmpleado"><svg class="glyph stroked star"><use xlink:href="#stroked-printer"></use></svg> Recibo Empleado</a></li>
            
             <li><a href="./totalColegio"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Total Colegio</a></li>
   <li><a href="./totalColegioMes"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Total Colegio Mes</a></li>
 
 
            <li><a href="./registroUsuario"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Registro Usuarios</a></li>
          
            <li role="presentation" class="divider"></li>
           
        </ul>

    </div><!--/.sidebar-->
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Inicio</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registro Empleado</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-default">
                                  @if(Session::has('success'))
                   <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                  </div> 
                         </div> 
                        @endif
                   
                              <div class="panel-heading">Datos Empleado</div>
                              <div class="panel-body">
                                    <div class="col-md-6">
                                          <form role="form"  action="/registrarEmpleado" method="post" onsubmit="return pruebaemail()">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                                                <div class="form-group" onsubmit="return pruebaemail()">
                                                      <label>Documento </label>
                                                      <input class="form-control" type="text" name="documento"  placeholder="documento" onkeypress="return valida(event);" required>
                                                      <label>Nombre</label>
                                                      <input class="form-control" name="nombre" placeholder="Nombre"  onkeypress="return soloLetras(event)" required>
                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name="apellido"   placeholder="apellido"  onkeypress="return soloLetras(event)" required>
                                                      <label>Nacionalidad</label>
                                                      <input class="form-control" type="text" name="nacionalidad"   placeholder="Nacionalidad"  onkeypress="return soloLetras(event)" required>

                                                      <label>Celular</label>
                                                      <input class="form-control" type="text" name="telefono"  placeholder="celular"  onkeypress="return valida(event);" required>
                                                 
                                                
                                                      <label>Correo</label>
                                                      <input id="email" class="form-control" type="text" name="correo"  placeholder="Correo" required>
                                                                                        
                
                                                      <label>Dirección</label>
                                                      <input class="form-control" type="text" name="direccion"  placeholder="Dirección" required>

                                                      <label>Fecha Nacimiento</label>
                                                      <input class="form-control" type="text" name="fechaNacimiento"   placeholder="AAAA-MM-DD" onblur="return validar(this)" required>

                                                      <label>Estudios Universitarios</label>
                                                      <input class="form-control" type="text" name="estudiosRealizados"   placeholder="Estudios" onkeypress="return soloLetras(event)" required>

                                                      <label>Nivel Estudios </label>
                                                      <input class="form-control" type="text" name="nivel"   placeholder="nivel" required>
                                                      
                                                     
                                                      <label>Lugar Estudios </label>
                                                      <input class="form-control" type="text" name="lugarEstudios"  placeholder="lugar Estudios" onkeypress="return soloLetras(event)"  required>

                                                      <label>Cargo</label>
                                                      <input class="form-control" type="text" name="cargo"  placeholder="cargo" onkeypress="return soloLetras(event)" required>
                                                      

                                                   
                                                      <div class="form-group">

                                                        <div class="form-group">
                                                         {!! Form::label('grado', 'Grado') !!}
                                                         <select class="form-control" id="grado" name="grado" >
                                                          <option value="1" >PREJARDIN</option>
                                                          <option value="2" >JARDIN</option>
                                                          <option value="3" >TRANSICION</option>
                                                          <option value="4" >1A</option>
                                                          <option value="5" >1B</option>
                                                          <option value="6" >1C</option>
                                                          <option value="7" >2A</option>
                                                          <option value="8" >2B</option>
                                                          <option value="9" >2C</option>
                                                          <option value="10" >3A</option>
                                                          <option value="11" >3B</option>
                                                          <option value="12" >3C</option>
                                                          <option value="13" >4A</option>
                                                          <option value="14" >4B</option>
                                                          <option value="15" >4C</option>
                                                          <option value="16" >5A</option>
                                                          <option value="17" >5B</option>
                                                          <option value="18" >5C</option>
                                                          <option value="NULL" >No Asignar</option>
                                                        </select> 

                                                      </div>
                                                    </div>  


                                                      <div class="form-group">
  

                                                      <label>Tiempo trabajo</label>
                                                      <input class="form-control" type="text" name="tiempoTrabajo"  placeholder="tiempoTrabajo" required>


                                                      <label>Fecha Ingreso</label>
                                                      <input class="form-control" type="text" name="fechaIngresoTrabajo"  placeholder="AAAA/MM/DD" required>

                                                      <label>Valor Nomina</label>
                                                      <input class="form-control" type="text" name="valorNomina"  placeholder="Valor Nomina"  onkeypress="return valida(event);" required>

                                                       <div class="form-group">
                                                        <label>Estado Civil </label>
                                                        <div class="radio">
                                                            <label>
                                                             <input type="radio" name="estadoCivil" id="optionsRadios1" value="madre_soltera" checked>Soltera/o
                                                           </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                           <input type="radio" name="estadoCivil" id="optionsRadios2" value="Divorciado">Divorciada/o
                                                         </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios3" value="casado">Casada/o
                                                          </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios4" value="viudo">Viuda/o
                                                          </label>
                                                        </div>
                                                    


                                                </div>
                                                                                                
                      
                                                <button type="submit" class="btn btn-default">Registrar</button>
                                                <button type="reset" class="btn btn-primary">Borrar</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div><!-- /.col-->
            </div><!-- /.row registros estudiantes-->
    </div>  <!--/.main-->

    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/chart.min.js"></script>
    <script src="./js/chart-data.js"></script>
    <script src="./js/easypiechart.js"></script>
    <script src="./js/easypiechart-data.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>
    <script>
        

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>   
</body>

</html>
