<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/pdf.css" />
</head>
<!--<link type="text/css" rel="stylesheet" href="css/style_pdf.css" />-->

<body background="../images/reciboEstudiante.png"  style="width:900px;height:900px;background-repeat: no-repeat; background-position: left left" > 
  
   <!--<a href="{{ route('htmltopdfview',['download'=>'pdf']) }}">Download PDF</a>
 -->

  <header class="clearfix">
  <div id="logo">

  </div>
  </header>


<div class="row" style="margin-top:-47px;margin-left:91px;width:0px;height:0px;padding: 7px 3px; display:block">
  <table style="margin-top:-20px;margin-left:0px; height:0px;width:0px;">
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;"> {{$user->recibo}}</th>
            <th style="padding: 7px 143px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;"> {{$user->fecha}}</th>
            
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->total}}</th>
        </tr>
</table>

  <table style="margin-top:-150px;margin-left:300px; height:64px;width:383px;">
        <tr>
            <th style="padding: 8px 7px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;"> {{$user->recibo}}</th>
            <th style="padding: 7px 120px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;"> {{$user->fecha}}</th>
            
        </tr>
        <tr>
            <th style="padding: 10px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->total}}</th>
        </tr>
</table>



<table style="margin-top:-30px;margin-left:67px;">
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;"> {{$user->nombre}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->grado}}</th>
        </tr>
        <tr >
            <th style="padding: 3px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->tipo}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->mes}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->valorMens}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->valorExtraordinario}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->Observaciones}}</th>
        </tr>
       
          </table>

 <table style="margin-top:-283px;margin-left:340px;">
        <tr>
            <th  style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->nombre}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->grado}}</th>
        </tr>
        <tr style="padding:2px;0px;">
            <th style="padding: 10px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->tipo}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;">{{$user->mes}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->valorMens}}</th>
        </tr>
        <tr>
            <th style="padding: 5px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->valorExtraordinario}}</th>
        </tr>
        <tr>
            <th style="padding: 7px 3px;color: #5D6975;width:50%;white-space: nowrap;font-weight: normal;" >{{$user->Observaciones}}</th>
        </tr>
        
       </table>

</div>

</html>
