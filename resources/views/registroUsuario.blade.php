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
                <h1 class="page-header">Registro Usuario</h1>
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
                   
                              <div class="panel-heading" >Datos Usuario</div>
                              <div class="panel-body">
                                    <div class="col-md-6">
                                          <form role="form"  action="/registrar" method="post">
              
                                                <div class="form-group" style="border:1px;">
                                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  
                                                      <label>Documento </label>
                                                      <input class="form-control" type="text" name="documento"  placeholder="Documento" required>
                                                      <label>Nombre</label>
                                                      <input class="form-control" name="nombre" placeholder="Nombre">
                                                      <label>Apellido</label>
                                                      <input class="form-control" type="text" name="apellido"   placeholder="Apellido" required>
                                                  
                                                      <label>Contraseña</label>
                                                      <input class="form-control" type="text" name="contrasena"   placeholder="Contraseña" required>
                                                   
                                                      <label>Telefono</label>
                                                      <input class="form-control" type="text" name="telefono"  placeholder="Telefono" required>
                                                      <label>Nombre Usuario</label>
                                                      <input class="form-control" type="text" name="usuario"   placeholder="Nombre Usuario" required>
                                                  
                                                      <label>Dirección</label>
                                                      <input class="form-control" type="text" name="direccion"  placeholder="Dirección" required>

                                                      <label>Correo</label>
                                                      <input class="form-control" type="text" name="correo"  placeholder=" Correo" required>

                                                  
                                                </div>
                                                                                                
                                                
                                                <button type="button" class="btn btn-primary">Editar</button>
                                                <button type="submit" value="Registrar" class="btn btn-default">Registrar</button>
                                                <button type="button" class="btn btn-primary">Borrar</button>
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
