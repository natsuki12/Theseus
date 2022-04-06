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
    <title>Theseus Shop | Ps4 </title>
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
				 La Mejor Variedad De Juegos Para Tu Consola Ya Sea Xbox 360 o Xbox One, Tenemos Todos Tus Juegos Al Mejor Precio y A La Mejor Calidad, Theseus Shop You Are Ready?
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/switch.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nintendo</h4>
				  <p>
				 La Mejor Variedad De Juegos Para Tu Consola Favorita De Nintendo, Tenemos Todos Tus Juegos Al Mejor Precio y A La Mejor Calidad, Theseus Shop You Are Ready?
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/PS4.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>PlayStation </h4>
				  <p>
				 La Mejor Variedad De Juegos Para Tu Consola Ya Sea Ps4 o Ps3, Tenemos Todos Tus Juegos Al Mejor Precio y A La Mejor Calidad, Theseus Shop You Are Ready?
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
	<h3 style="text-align:center; color:orange;">MORTAL KOMBAT</h3>	
	<img src="images/MRTK.jpg" alt="#"/>
	<div class="caption">
	<h5 style="color:orange">Descripcion del Juego</h5>	
	<p style="color:orange;"align="justify">
	
La el mejore juego de la saga de mortal kombat, con todos los personajes que opdias esperar y mucho mas, con expancion de DLC (de alli el XL) adaptado perfectamente parata tu consola xbox one con el potencial necesario para entretenerte horas de juego y a los mejores graficos	</p>
	<a class="pull-right" href="comprar.php">COMPRAR</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center; color:orange;">LEGO</h3>	
	<img src="images/LEGOPS4.jpg" />
	<div class="caption">
	<h5 style="color:orange;"> Descripcion del JUEGO</h5>	
	<p style="color:orange;" align="justify">
	
ESTAS LISTO PARA LA AVENTURA LEGO? UNETE A ESTE NUEVO ESTRENO DE LA FRANQUISIA MAS FAMOSA DE JUEGOS Y MUNECOS ARMABLES DEL MECADO CON UNA EXPANCION AGRADADA PARA LOS FANATICOS DE MARVEL STUDIOS "LEGO MARVEL SUPER HEROES" ESTAS LISTO PARA LA AVENTURA?
	</p>
	<a class="pull-right" href="comprar.php">COMPRAR</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center; color:orange;">ASSASINS CREED</h3>	
	<img src="images/ACPS4.jpg" />
	<div class="caption">
	<h5 style="color:orange;"> Descripcion del JUEGO</h5>	
	<p style="color:orange;" align="justify">
	
DE LA SAGA DE ASSASINS CREED DESPUES DEL ROTUNDO EXITO COMO ASSESINS CREED IV "BLACK FLAG LLEGA LA EDICION ESPECIAL PARA TU CONSOLA PS4 CON EL TITLUTO ASSASINS CREED ORIGINS LLENO DE ACCION Y AVENTURAS UN JUEGO QUE TE DIVERTIRA POR HORAS EN EL CUAL INTENTARAS RESOLVER LOS PROBLEMAS DE EXIO Y MATARAS GENTE SIGILOSAMENTE "
	</p>
	<a class="pull-right" href="comprar.php.php">COMPRAR</a>
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