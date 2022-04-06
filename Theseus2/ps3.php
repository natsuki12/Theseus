<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Theseus Shop | PS3 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Cesar Requena">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="estilos.css">
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40"  background="images/Fondo.jpg" style="background-attachment: fixed;">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/XBOX.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Xbox</h4>
				  <p>
				   recuerde que en esta disciplina la práctica es la que da el dominio en el uso de las herramientas, estaremos siempre a la orden para compartir con usted experiencias y sobretodo para ayudarlo en el aprendizaje.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/switch.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nintendo</h4>
				  <p>
				  La topografía aplicada permite adquirir los conocimientos necesarios para realizar levantamientos topográficos para futuras aplicaciones y proporciona la capacidad para resolver problemas que se presentan en el campo.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/PS4.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>PlayStation </h4>
				  <p>
				  No olvide que la clave del éxito en el estudio de las herramientas matemáticas radica en el entendimiento cabal de los conceptos fundamentales y la aplicación razonada enla resolución de problemas.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3 style="text-align:center; color:white;background-color:#2e9afe;">Todos nuestros Juegos</h3>
<div class="row" style="text-align:center">
			<div class="span2">
			</div>
</div>
<h3 style="text-align:center; color:white;background-color:#2e9afe;;">Juegos Mas Populares</h3>
<div class="row" style="text-align:center">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center; color:orange;">ALIENS</h3>	
	<img src="images/ALIENS.jpg" alt="#"/>
	<div class="caption">
	<h5 style="color:orange">Descripcion del Juego</h5>	
	<p style="color:orange;"align="justify">
	
PARA RECORDAR LOS VIEJOS TIEMPOS.. SEGUN LOS CREADORES DEL JUEGO, ALIENS SE BASA EN DIVERTIRTE COMO NUNCA CON EL CLASICO JUEGO DE ALIENS COLONIALS PERO ADAPTADO A TU CONSOLA PS3 SIN PERDER TODA LA DIVERSION DEL JUEGO ORIGINAL DE TU PELICULA FAVORITA
	<a class="pull-right" href="comprar.php">COMPRAR</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center; color:orange;">PLANTS VS ZOMBIES</h3>	
	<img src="images/PVZ.jpg" />
	<div class="caption">
	<h5 style="color:orange;"> Descripcion del JUEGO</h5>	
	<p style="color:orange;" align="justify">
	
EL JUEGO DE ESTRATEGIA MAS ESPERADO POR LAS PERSONAS EL JUEGO QUE AL PRINCIPIO NO PARECE NADA DEL OTRO MUNDO PERO AL FINAL SE VUELVE UNO DE LOS JUEGOS MAS ADICTIVOS QUE HAY, DESPUES DE JUGARLO EN TU ANDROID QUE ESPERAS PAR APROBARLOS EN TU CONSOLA PS3?	</p>
	<a class="pull-right" href="comprar.php">COMPRAR</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center; color:orange;">GOD OF WAR</h3>	
	<img src="images/GOW.jpg" />
	<div class="caption">
	<h5 style="color:orange;"> Descripcion del JUEGO</h5>	
	<p style="color:orange;" align="justify">
	
QUE ESPERAS? KRATOS ESTA LISTO PARA QUE JUNTO A EL EMPIEECEN A DESTRUIR Y ANIQUILAR A LOS QUE LLAMAN DIOSES, EN ESTA FANTASTICA AVENTURA KRATOS BUSCA ANIQUILAR A TODOS LOS DIOCES DEL OLIMPO, EMPEZANDO POR ARES Y TERMINANDO POR EL GRANDE Y PODEROSO ZEUS
	<a class="pull-right" href="comprar.php">COMPRAR</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div style="color:black;"class="well well-small" >
		<h3>Importante</h3>	
		<p>
		Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los juegos de los usuarios que se ofrecen en la pagina y a distancia para facilitar la compra de los clientes ante cualquier inconveniente.<br><br></b></b>
		</p>
	</div>
	</div>
	<div class="span6">
	<div style="color:black;"class="well well-small">
		<h3> Lo que vendra</h3>
		<h5>Nuevos juegos</h5>	
		<p>
		Tendremos una pagina actualizada y nuestros miembros podrán contar con todos nuestros juegos disponibles, asi como la visualización de nuevos juegos que se añadan a la página.
		
		</p>
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Cesar Requena y Pedro Arevalo 4 de Julio de 2018 <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>