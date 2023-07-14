<?php

session_start();

//if(empty($_SESSION["id"])){
//header("location: Login-jd.php");
//}
   ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Marca-Jminnovation</title>
   
	<link rel="stylesheet" href="css/bootstrapB.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

</br>

          <div id="Marca-Jminnovation">
   
          <div style="text-align:center;">

    
 

 <div class="bd-example mb-0" style="height: 80vh">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			
        <ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
            
			<div class="carousel-inner">
				<div class="carousel-item active" style="height: 80vh">
					<img src="img/184.jpeg" class="block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">jd</h5>
						
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/AI-Final-02-1536x806.webp" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">Coneccion a tu servicio</h5>
						<p>con la AI Sera mas Confiable</p>
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/vida.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">EL mejor Compañero en tus tareas Diarias</h5>
						
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
		<?php
     
     echo $_SESSION["nombre"]."".$_SESSION["apellido"];
   
     ?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="#">Programa</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="Actividad 10 DB.html">Contactanos</a>

				<li class="nav-item dropdown">
                    
					<a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Servicios
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Capacitacion </a>
						<a class="dropdown-item" href="#">Perfila tu AI</a>
						<a class="dropdown-item" href="servicios.html">Adquiere tu Acompañante jd</a>
                        <a class="dropdown-item" href="servicios.html">Nueva funciones</a>
                        <a class="dropdown-item" href="servicios.html">visita Tecnica</a>
                        <a class="dropdown-item" href="servicios.html">Otros</a>
					</div>
				</li>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="modelo/Controlador-Salir.php">Salir</a>
			</div>
			<div class="text-center justify-content-center">
				<a class="btn btn-outline-primary" target="_blank" href="https://www.facebook.com">Facebook</a>
				<a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
			</div>
		</div>

	</nav>
	<div class="">
		<div class="jumbotron bg-dark text-light rounded-0">
			<h1 class="display-4">Hello, Asociado!</h1>
			<p class="lead">Recuerda dar Inicio a tu programa segun la recomendacion de TU especialista y nivel de formacion interactiva con jd, programada con las tareas Asignadas...</p>
			<hr class="my-4 bg-light">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p>Interacción humana 
				Un ser humano guía a un sistema de IA durante su aprendizaje.</p>
				<a class="btn btn-primary btn-lg" href="https://atozofai.withgoogle.com/intl/es-419/human-in-the-loop/" role="button">Learn more</a>
			</div>
		</div>
	</div>

 <br>
 
 <h2>Profile</h2></div>

 </div>
   <center><img src="data:image/png;base64,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" height="300" width="300"><center/>

</div>

<table>
    <tr>
        <th>Interaccion AI</th><br>
        <th>Tareas Progamadas</th>
        <th>Rutinas Cotidanas</th>
    </tr>
    <tr>
        <td>
		<a href="ProyectoA2.php"><button style="height: 30px; width:200px">En Aprendisaje</button></td>
        <td>
            <a href="ProyectoA3.html"> <button style="height: 30px; width:200px">En el Trabajo</a>
        </td>
        <td>
		<a href="ProyectoA4.php"><button  style="height: 30px; width:200px  ">En el Hogar</button>
        </td>
    </tr>

</table>
   
   <br>
   
</div>
   
    <br>

                          
<br>
    <a href="https://drive.google.com/file/d/1vz4upVrm6y7XPyL_0v-K9ZaLb7sb9a3o/view?usp=sharing">wireframe</a>
    

     <script src="js/jquery-3.3.1.slim.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>

</body>
</html>