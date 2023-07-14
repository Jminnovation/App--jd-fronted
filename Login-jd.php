<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="css/bootstrap.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
   <title>Inicio de sesión</title>
   
</head>
<body>
</br>
<div class="login-content">

<div class="text-center">

<?php

include("Conexionwed.php");
include("Controlador-login.php");

?>

 <img class="wave" src="img/LOGO.png" width="13%">
   
      

 <form method="post" action="">
          <h2 class="title">BIENVENIDO</h2>

           
                      <div class="i">
                  <i class="fas fa-user"></i>
            

                  
               
                  <h5>Usuario</h5>
 <input id="usuario" type="text" class="input" name="usuario">

                       <div class="i">
                  <i class="fas fa-lock"></i>

              
           
                  <h5>Contraseña</h5>
<input type="password" id="input" class="input" name="password">
    
                    <div class="view">
<div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>

</br>    

   <a class="font-italic isai5" href="Recuperacion.PHP">Olvidé mi contraseña</a>
     <a class="font-italic isai5" href="REGISTRO DB.PHP">Registrarse</a>
</br>

<a name="btningresar" class="btn"  type="submit" href="ProyectoA1.php" value="INICIAR SESION"button>INICIAR SESION</button>

</form>

</div>

</div>

<script src="js/fontawesome.js"></script>
   <script src="js/main2.js"></script>
   <script src="js/bootstrap.min.js"></script>
    
</body>

</html>
    

