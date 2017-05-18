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

   var valor1=document.getElementById('email1').value;
   var valor2=document.getElementById('email2').value;
   var valor3=document.getElementById('email3').value;

    if(!re.exec(valor1))
    {
        alert('correo no valido');
        return false;
    }
   
  if(!re.exec(valor2)){
        alert('correo no valido');
        return false;
    
  }
  if(!re.exec(valor3)){
    alert('correo no valido');
        return false;

  }
  else{
         
if(validar()==true){
          return true;
        }
        else {return false;}
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

function validar() {
  patron = /^\d{4}\-\d{2}\-\d{2}$/
  var valor11=document.getElementById('fecha1').value;
  var valor22=document.getElementById('fecha2').value;



  
  if((patron.test(valor11)==false)&&(patron.test(valor22)==false)){
    alert('fecha no valida');
  return false;
  }
   
  if((patron.test(valor22)==true)&&(patron.test(valor11)==true)){
  return true;
  }
 


}

function anActual(valor) {
  patron = /^\d{4}$/
  if(patron.test(valor.value)==false){
    alert('fecha no valida solo 4 digitos');
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
                <h1 class="page-header">Registro Estudiante</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
                  <div class="col-lg-12">
                               @if(Session::has('success'))
                   <div class="row">
                <div class="col-md-12">
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                  </div>
                  </div> 
                         </div> 
                        @endif
                        <div class="panel panel-default">
                              <div class="panel-heading">Registro Estudiante</div>
                              <div class="panel-body">
                                    <div class="col-md-6">
                                          <form role="form" action="/registrarEstudiante" method="post" onsubmit="return pruebaemail()">

                                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                                                <div class="form-group">
                                                      <label>DATOS ESTUDIANTE</label>
                                                      <input class="form-control" type="text" name="nombre" placeholder="Nombre"  onkeypress="return soloLetras(event)"  required>

                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name="apellido"   placeholder="apellido" onkeypress="return soloLetras(event)" required>

                                                      <label>Fecha Nacimiento</label>
                                                      <input id="fecha1" class="form-control" type="text" name="fechaNac"   placeholder="AAAA-MM-DD" required>

                                                      <label>Documento</label>
                                                      <input class="form-control" type="text" name="documento"  placeholder="documento" onkeypress="return valida(event);"  required>

                                                      <label>FechaExpedicón</label>
                                                      <input id="fecha2" class="form-control" type="text" name="expedicion"   placeholder="AAAA-MM-DD">

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name="celular"    placeholder="Celular" onkeypress="return valida(event);" required>

                                                      <label>telefono</label>
                                                      <input class="form-control" type="text" name="telefono"   placeholder="telefono" onkeypress="return valida(event);" required>

                                                      <label>Dirección</label>
                                                      <input class="form-control" type="text" name="direccion"  placeholder="Dirección" required>

                                                      <label>Grado</label>
                                                      <div class="form-group">
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
                                                        </select> 
                                                         </div> 


                                                      <label>Peso Estudiante en Kg</label>
                                                      <input class="form-control" type="text" name="peso"   placeholder="Peso Estudiante" onkeypress="return valida(event);" required>

                                                      <label>Tipo sangre</label>
                                                     
                                                      <div class="form-group">
                                                      <select class="form-control" id="tipoSangre" name="tipoSangres" >
                                                          <option value="1" >O-</option>
                                                          <option value="2" >O+</option>
                                                          <option value="3" >A-</option>
                                                          <option value="4" >A+</option>
                                                          <option value="5" >B-</option>
                                                          <option value="6" >B+</option>
                                                          <option value="7" >AB-</option>
                                                          <option value="8" >AB+</option>
                                                        </select> 
                                                        </div>
                                                         

                                                      <label>Año Actual</label>
                                                      <input class="form-control" type="text" name="anioActual"  placeholder="aÑO Actual" onkeypress="return valida(event);" onblur="return anActual(this)" required>

                                                      <label>Condición</label>
                                                      <input class="form-control" type="text" name="condicion"  placeholder="Condición" onkeypress="return soloLetras(event)" required>

                                                      <label>Religión</label>
                                                      <input class="form-control" type="text" name="religion"   placeholder="Religión" onkeypress="return soloLetras(event)" required>

                                                      <label>DATOS DEL PADRE</label>
                                                      
                                                      <input class="form-control" type="text" name="documentoPadre"   placeholder="Documento Padre" onkeypress="return valida(event);" required>

                                                      <label>Nombre </label>
                                                      <input class="form-control" type="text" name="nombrePadre"   placeholder=" Nombre Padre" onkeypress="return soloLetras(event)" required>

                                                      <label>Apellidos </label>
                                                      <input class="form-control" type="text" name="apellidoPadre"   placeholder="Apellidos Padre" onkeypress="return soloLetras(event)" required>

                                                      <label>Ocupación </label>
                                                      <input class="form-control" type="text" name="ocupacionPadre"   placeholder="Ocupación Padre" onkeypress="return soloLetras(event)" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name="celularPadre"   placeholder="celular" onkeypress="return valida(event);" required>

                                                      <label>correo</label>
                                                      <input id="email1" class="form-control" type="text" name="correoPadre"  placeholder=" Correo Padre" required>

                                                      <label>DATOS DE LA MADRE</label>
                                                      <input class="form-control" type="text" name="documentoMadre"   placeholder=" Documento Madre" onkeypress="return valida(event);" required>

                                                      <label>Nombre</label>
                                                      <input class="form-control" type="text" name="nombremadre"   placeholder="Nombre madre" onkeypress="return soloLetras(event)" required>

                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name="apellidoMadre"   placeholder="Apellidos Madre" onkeypress="return soloLetras(event)" required>

                                                      <label>Ocupación</label>
                                                      <input class="form-control" type="text" name="ocupacionMadre"   placeholder="Ocupación Madre" onkeypress="return soloLetras(event)" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name= "celularMadre"   placeholder="celular Madre" onkeypress="return valida(event);" required>

                                                      <label>correo</label>
                                                      <input id="email2" class="form-control" type="text" name="correoMadre"  placeholder=" Correo Madre" required>

                                                      

                                                       <div class="form-group">
                                                        <label>Estado Civil </label>
                                                        <div class="radio">
                                                            <label>
                                                             <input type="radio" name="estadoCivil" id="optionsRadios1" value="madre_soltera" checked>Madre Soltera
                                                           </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                           <input type="radio" name="estadoCivil" id="optionsRadios2" value="Divorciado">Divorciados
                                                         </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios3" value="casado">Casados
                                                          </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios4" value="viudo">Viudo
                                                          </label>
                                                        </div>
                                                      <div class="radio">
                                                          <label>
                                                            <input type="radio" name="estadoCivil" id="optionsRadios5" value="soltero">Soltero
                                                          </label>
                                                        </div>
                                                      </div>

                                                      <label>DATOS ACUDIENTE</label>
                                                      <input class="form-control" type="text" name="documentoAcudiente" placeholder="Documento Acudiente" onkeypress="return valida(event);" required>

                                                      <label>nombre</label>
                                                      <input class="form-control" type="text" name="nombreAcudiente" placeholder=" Nombre Acudiente" onkeypress="return soloLetras(event)" required>

                                                      <label>celular</label>
                                                      <input class="form-control" type="text" name="celuAcudiente" placeholder=" celular Acudiente" onkeypress="return valida(event);" required>

                                                      <label>correo</label>
                                                      <input id="email3" class="form-control" type="text" name="correoAcudiente"  placeholder="Correo Acudiente" required>

                                                      <label>Ocupacion</label>
                                                      <input class="form-control" type="text" name="ocupacion"  placeholder="Ocupacion Acudiente" onkeypress="return soloLetras(event)" required>

                                                     <label>Parentesco</label>
                                                      <input class="form-control" type="text" name="parentesco"  placeholder="Parentesco Acudiente" onkeypress="return soloLetras(event)" required>

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
