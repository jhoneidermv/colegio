<!DOCTYPE HTML>
<html>
<head>
<title>Colegio Bello Horizonte</title> 
 <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular Login Form Responsive" />
<!-- Custom Theme files -->
<link href="./css/stylelog.css" rel="stylesheet" type="text/css" media="all"/>
<!-- //Custom Theme files -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- pop-up-box -->
<script src="./js/jquery-2.2.3.min.js"></script> 
<script>
    $(document).ready(function() {
        $('.popup-top-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });                                                                                         
    }); 
</script>
<!-- //pop-up-box --> 
</head>
<body>
    <!-- login starts here -->
    <div class="login agile">
        <div class="w3agile-border">
            <h2></h2>
            <div class="login-main login-agileits"> 
                <h1><IMG  SRC="./images/logo1.png"  ></h1> 
                   @if(Session::has('mensaje_error'))
                    {{ Session::get('mensaje_error') }}
                        @endif
                <form action="/logear" method="post">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <p>Usuario</p>
                    <input type="text" placeholder="usuario" name="nombre" id="nombre" required>
                    <p>Contraseña</p>
                    <input type="password" placeholder="Ingresa contraseña" name="contrasena" id="contrasena" required>
            
            <!--
                    <div class="g-recaptcha" data-sitekey="6LddhSAUAAAAAPxEhmsVzDy7-hmZZ3rJjJyYdeiQ" data-theme="dark"></div>
                -->
                {{Form::checkbox('remember',true)}} Remember me  
            
                    <input type="submit" value="Ingresar" id="submit" name="submit" class="boton">
                </form>
                
                
            </div>
        </div>
        <!-- modal -->
        
    </div>
    <!-- //login ends here -->
    <!-- copyrights -->  
   
    </div>
    <!-- //copyright -->
    <script src="./js/jquery.magnific-popup.js" type="text/javascript"></script>
  
  



</body>
         
     

<footer class="copy-rights wthree">
           
  
        <p>Ubicado en la carrera 52 # 49- 61 Sevilla (Valle del Cauca) | Telefono: (2)219-6787  </p>     

    

</footer>


    

</html>