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

<body  >

<header class="clearfix">
  <div id="logo">
  <img src="images/logo.png">
  </div>
  <h1 style="text-align:center"> Información Estudiante </h1>
  </header>
  

<div class="row">
	<table>
        
        <tr>
            <th>Nombre</th>
            <th class="hola">{{$user->nombre}}</th>
        </tr>
        <tr>
            <th>Apellido</th>
            <th class="hola">{{$user->apellido}}</th>
        </tr>
        <tr>
            <th>fecha Nacimiento</th>
            <th class="hola">{{$user->fechaNac}}</th>
        </tr>
        <tr>
            <th >Documento</th>
            <th class="hola" >{{$user->documento}}</th>
        </tr>
        <tr>
            <th >Expedición</th>
            <th class="hola" >{{$user->expedicion}}</th>
        </tr>
        <tr>
            <th >Telefono</th>
            <th class="hola" >{{$user->telefono}}</th>
        </tr>
        <tr>
            <th>Celular</th>
            <th class="hola">{{$user->celular}}</th>
        </tr>
        <tr>
            <th>Dirección</th>
            <th class="hola">{{$user->direccion}}</th>
        </tr>
        <tr>
            <th>Peso</th>
            <th class="hola">{{$user->peso}}</th>
        </tr>
        <tr>
            <th>Tipo de Sangre</th>
            <th class="hola">{{$user->tipoSangre}}</th>
        </tr>
        <tr>
            <th>Anio Actual</th>
            <th class="hola">{{$user->anioActual}}</th>
        </tr>
        <tr>
            <th>Condición</th>
            <th class="hola">{{$user->condicion}}</th>
        </tr>
        <tr>
            <th>Religión</th>
            <th class="hola">{{$user->religion}}</th>
        </tr>
        <tr>
            <th>Grado</th>
            <th class="hola">{{$user->grado}}</th>
        </tr>
              
    </table>
</div>
  <h1 style="text-align:center">  Información Acudiente </h1>
<div class="row">
  <table>
        
        <tr>
            <th>Documento Padre</th>
            <th class="hola">{{$user->documentoPadre}}</th>
        </tr>
      <tr>
            <th>Nombre Padre</th>
            <th class="hola">{{$user->nombrePadre}}</th>
        </tr>
<tr>
            <th>Nombre Madre</th>
            <th class="hola">{{$user->nombremadre}}</th>
        </tr>

<tr>
            <th>Apellido Madre</th>
            <th class="hola">{{$user->apellidoMadre}}</th>
        </tr>

<tr>
            <th>Apellido Padre</th>
            <th class="hola">{{$user->apellidoPadre}}</th>
        </tr>

<tr>
            <th>Documento Madre</th>
            <th class="hola">{{$user->documentoMadre}}</th>
        </tr>

<tr>
            <th>Ocupación Padre</th>
            <th class="hola">{{$user->ocupacionPadre}}</th>
        </tr>

<tr>
            <th>Ocupación Madre</th>
            <th class="hola">{{$user->ocupacionMadre}}</th>
        </tr>

<tr>
            <th>Celular Padre</th>
            <th class="hola">{{$user->celularPadre}}</th>
        </tr>

<tr>
            <th>Celular Madre</th>
            <th class="hola">{{$user->celularMadre}}</th>
        </tr>

<tr>
            <th>Correo Madre</th>
            <th class="hola">{{$user->correoMadre}}</th>
        </tr>

<tr>
            <th>Correo Padre</th>
            <th class="hola">{{$user->correoPadre}}</th>
        </tr>

<tr>
            <th>Estado Civil</th>
            <th class="hola">{{$user->estadoCivil}}</th>
        </tr>

<tr>
            <th>Nombre Acudiente</th>
            <th class="hola">{{$user->nombreAcu}}</th>
        </tr>

<tr>
            <th>Documento Acudiente</th>
            <th class="hola">{{$user->documentoAcu}}</th>
        </tr>

<tr>
            <th>Celular Acudiente</th>
            <th class="hola">{{$user->celularAcu}}</th>
        </tr>

<tr>
            <th>Ocupación Acudiente</th>
            <th class="hola">{{$user->ocupacion}}</th>
        </tr>

<tr>
            <th>Correo Acudiente</th>
            <th class="hola">{{$user->correoAcu}}</th>
        </tr>

<tr>
            <th>Parentesco Acudiente</th>
            <th class="hola">{{$user->parentesco}}</th>
        </tr>


</table>


</body>
</html>
