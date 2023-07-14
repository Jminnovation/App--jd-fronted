<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="css/REGISTRO DB.css">
    <title>Actividad Base de Datos</title>
</head>
<body>
<?php

include("ConexionReg.php");
include("ControladorReg.php");

?>
<div id="Marca-Jminnovation">
    <div class="logo-item">jd</div>
   </div>
  </br>
  <div class="B">
    <div class="c1"></div>
    <div class="c1"></div>
    <div class="c1"></div>
  </div>

<section class="form-register">

    <h4>Formulario Registro</h4>
    
<form method="post" action="">
     <label for="nombre">nombre:</label>
    <input class="controls" type="text" name="nombre"placeholder="Ingrese su Nombre" required>

    <label for="apellidos">apellidos:</label>
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">

    <label for="Cedula">Cedula:</label>
    <input class="controls" type="number" name="Cedula" placeholder="Ingrese su Documento"required>
   
    <label for="Edad">Edad:</label>
    <input class="controls" type="number" name="Edad" placeholder="Ingrese su Edad"required>

    <label for="correo">correo:</label>
    <input class="controls" type="email" name="correo"  placeholder="Ingrese su Correo"required>

    <label for="Clave">Crea TU... Contraseña:</label>
    <input class="controls" type="password" name="Clave"  placeholder="Ingrese su Contraseña"required>

    <p>Estoy de acuerdo con <a href="https://drive.google.com/file/d/1N1roC7GxTKmQ1C5MPqSdEByNewVPD3Bo/view?usp=sharing">Terminos y Condiciones</a></p>
</br>
    <a href="Login-jd.php"id="bo">Enviar</button>
    <br>
    <p><a href="Login-jd.php">¿Ya tengo Cuenta?</a></p>
</form>

</section>

<script src="./Actividad 10 DB.js"></script>
</body>
</html>