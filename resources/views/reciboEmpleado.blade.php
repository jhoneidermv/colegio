<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Colegio Bello Horizonte</title>

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/datepicker3.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="./js/lumino.glyphs.js"></script>
<script>
// valida que solo se registren numeros y no letras
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
// suma los resultados de las casillas donde se ingresa el valor a pagar
function sumar (valor) {
  

    var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  

    total = document.getElementById('total').value;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
  
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('total').value = total;
}

function restar(valor){
  
   var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = document.getElementById('total').value;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = (parseInt(total) - parseInt(valor));
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('total').value = total;
}

function SmrCampo(campo)
  {
    valor1=parseInt(document.getElementById('total').value);
    valor2=1;
    document.getElementById('total').value= valor1 + valor2;
  }
  function RtrCampo(campo)
  {
    document.getElementById('total').value-= 1;
  }

function activar(){
document.getElementById('mitext').readOnly=true;
}
function desactivar(){
document.getElementById('mitext').readOnly=false;
}

//envio datos al controller de pdf
function envio(pag){ 
    document.form.setAttribute("target", "_blank");
    document.form.action= pag 
    document.form.submit() 

  } 
 

function myFunction()
{

var grado=document.getElementById("grado").value;
var  valorMes=document.getElementById("valorMens").value; 
var valor=grado=="no encontrado";

var valor2=valorMes=="0";

if(valor2)
{
 alert("INGRESE UN VALOR VALIDO EN Valor a Pagar Mes")
 return false;
}



if(valor||grado=="vacio")
{
  alert("NO PUEDE REGISTRAR  GRADO ERRONEO")

return false;
}
else
{
document.form.action= "/registrarNominaEmpleado" 
document.form.submit() 
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
                <a class="navbar-brand" href="#"><IMG style="position:absolute; left:0px; top:0px" SRC="./images/RECIBO2.png"  ><span>.......  Colegio Bello Horizonte...</span>
                </a>
                <ul class="user-menu">

                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{Auth::user()->nombre}} <span class="caret"></span></a>
                      
                            
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
                <h1 class="page-header">Recibo Empleado</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
                  <div class="col-lg-12">
                        <div class="panel panel-default">
                       
                   
                              <div class="panel-heading" >Generar Recibo</div>
                              <div class="panel-body">
                                    <div class="col-md-6">

                                      <form role="search" method="post" action="/buscarEmpleadoRecibo">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      <div class="form-group">
                                        <label>Nombre Empleado</label>
                                        <input class="form-control" name="nomEmpleado" placeholder="nombre Empleado" onkeypress="return soloLetras(event);" required>
                                        <button type="submit" value="Buscar" class="btn btn-primary">Buscar</button>
                                      </form>
   
                                          

                                          <form role="form" name="form" action="/registrarNominaEmpleado" method="post"  onsubmit="return myFunction()">
              
                                                <div class="form-group" style="border:1px;">
                                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                                     {!! Form::label('N° Recibo') !!}
                                                     {!! Form::text('recibo',$sistemas['recibo'], array('class' => 'form-control','readonly'=>'readonly')) !!}

                                                     {!! Form::label('Fecha') !!}
                                                     {!! Form::text('fecha',$sistemas['fecha'], array('class' => 'form-control','readonly'=>'readonly')) !!}

                                                     {!! Form::label('Nombre Empleado') !!}
                                                     {!! Form::text('nombre',$sistemas['nombre'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Grado','onkeypress'=>'return soloLetras(event)')) !!}


                                                     {!! Form::label('Grado') !!}
                                                     {!! Form::text('grado',$sistemas['grado'], array('class' => 'form-control','readonly'=>'readonly','placeholder'=>'Grado','id'=>'grado','onkeypress'=>'return soloLetras(event)')) !!}


                                                      
                                                      <div class="form-group">
                                                        <label>Mes a pagar</label>
                                                        <select name="mes" class="form-control">
                                                          <option value="1">Enero</option>
                                                          <option value="2">Febrero</option>
                                                          <option value="3">Marzo</option>
                                                          <option value="4">Abril</option>
                                                          <option value="5">Mayo</option>
                                                          <option value="6">Junio</option>
                                                          <option value="7">Julio</option>
                                                          <option value="8">Agosto</option>
                                                          <option value="9">Septiembre</option>
                                                          <option value="10">Octubre</option>
                                                          <option value="11">Noviembre</option>
                                                          <option value="12">Diciembre</option>
                                                        </select>
                                                      </div>


                                                      <div class="form-group has-success">
                                                        <label>Valor a Pagar Mes</label>
                                                        <input class="form-control" name="valorMens" id="valorMens" placeholder="Valor a Pagar Mes"   onchange="sumar(this.value);" onkeypress="return valida(event);" value="0" required>
                                                      </div>

                                                      <div class="form-group">
                                                        <label>Observaciones</label>
                                                        <input class="form-control" type="text" name="Observaciones" id="Observaciones" placeholder="Observaciones" value="vacio" onkeypress="return soloLetras(event);">
                                                      </div>

                                                      <input type="button" value="Activar pago Adicionales" onclick="desactivar()" class="btn btn-primary"/>

                                                        <div class="form-group has-success"> 
                                                          <label>Valor a Pagar Adicionales</label>
                                                          <input type="text"onkeypress="return valida(event);"  onchange="sumar(this.value);" id="mitext"  name="valorAdicional" value="0" />

                                                        </div>
                                                         

                                                        <div class="form-group has-success">
                                                          <label>Valor a Pagar Descuentos</label>
                                                          <input type="text"onkeypress="return valida(event);"  onchange="restar(this.value);"  id="valorDescuento" name="valorDescuento" value="0" />
                                                        </div>
                                                      

                                                      <div class="form-group has-success">
                                                        <label>Total a pagar</label>
                                                      <input type="text" onkeypress="return valida(event);"    id="total" name="total" value="0" readonly />
                                                       
                                                      <!-- <span>: </span> <span  onchange="restar(this.value);"  id="total" name="total" value="0"></span>-->

                                                      </div>

                                                
                                                </div>
                             
                                               
                                                <button type="submit" value="generarRecibo" class="btn btn-default">Registrar Pago</button>

                                                
                                          </div>
                                    </form>
                                       
                                                <input type="button" onClick="envio('vista/1')" class="btn btn-primary btn-xs" value="Vista Previa"> 
                                      <input type="button" onClick="envio('vista/2')" class="btn btn-primary btn-xs" value="Descargar"> 
                            
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
