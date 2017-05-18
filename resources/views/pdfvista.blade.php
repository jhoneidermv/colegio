<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<link type="text/css" rel="stylesheet" href="css/blue.css" />-->
<!--<link type="text/css" rel="stylesheet" href="css/style_pdf.css" />-->

<style>
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}


table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
  border: 1px solid #C1CED9;

}

table th {
  padding: 1px 10px;
  color: #5D6975;
 /* border-bottom: 1px solid #C1CED9;*/
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

.self ul li.ad {
    background-image:url(../images/icn-ad.gif);
}

.self ul li.mail {
    background-image:url(../images/icn-mail.gif);
}

.self ul li.tel {
    background-image:url(../images/icn-tel.gif);
}

.self ul li.web {
    background-image:url(../images/icn-web.gif);
}
.hola{
    color: #000000;
}

</style>

<body>

<header class="clearfix">
  <div id="logo">
  <img src="images/logo.png">
  </div>
  <h1 style="text-align:center"> Resumen de información Empleado </h1>
  </header>
  

<div class="row">
	<table>
        <tr>
            <th>Documento</th>
            <th class="hola">{{$user->documento}}</th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th class="hola">{{$user->nombre}}</th>
        </tr>
        <tr>
            <th>Apellido</th>
            <th class="hola">{{$user->apellido}}</th>
        </tr>
        <tr>
            <th>Nacionalidad</th>
            <th class="hola">{{$user->nacionalidad}}</th>
        </tr>
        <tr>
            <th >Telefono</th>
            <th class="hola" >{{$user->telefono}}</th>
        </tr>
        <tr>
            <th >Correo</th>
            <th class="hola" >{{$user->correo}}</th>
        </tr>
        <tr>
            <th >Dirección</th>
            <th class="hola" >{{$user->direccion}}</th>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <th class="hola">{{$user->fechaNacimiento}}</th>
        </tr>
        <tr>
            <th>Estudios Realizados</th>
            <th class="hola">{{$user->estudiosRealizados}}</th>
        </tr>
        <tr>
            <th>Nivel</th>
            <th class="hola">{{$user->nivel}}</th>
        </tr>
        <tr>
            <th>Cargo</th>
            <th class="hola">{{$user->cargo}}</th>
        </tr>
        <tr>
            <th>Lugar de Estudios</th>
            <th class="hola">{{$user->lugarEstudios}}</th>
        </tr>
        <tr>
            <th>Tiempo Trabajo</th>
            <th class="hola">{{$user->tiempoTrabajo}}</th>
        </tr>
        <tr>
            <th>Fecha Ingreso Trabajo</th>
            <th class="hola">{{$user->fechaIngresoTrabajo}}</th>
        </tr>
        <tr>
            <th>Valor Nomina</th>
            <th class="hola">{{$user->valorNomina}}</th>
        </tr>
        <tr>
            <th>Estado Civil</th>
            <th class="hola">{{$user->estadoCivil}}</th>
        </tr>
        <tr>
            <th>Grado</th>
            <th class="hola">{{$user->grado}}</th>
        </tr>
        
        
    </table>
</div>

</body>
</html>
