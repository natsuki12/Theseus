<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Theseus Shop</title>
</head>
<body background="images/Fondo.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #FFFFFF;">Compra del Usuario</h2>
		<center><div class="Ingreso">
		<a href="index2.php"><small>VOLVER A PAGINA PRINCIPAL</small></a>

	
			</tr></tr></table>
		</form>
<br>
<!-- formulario compra -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color:white " ><b>Factura</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: orange"><b>Ingresa nombre del artuculo</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: orange;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: orange;"><b>Codigo De La Tarjeta</b></label>
      <input type="text" name="pass" class="form-control"  placeholder="Ingresa CODIGO" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: orange"><b>Repite Codigo De La Tarjeta</b></label>
      <input type="text" name="rpass" class="form-control" required placeholder="repite CODIGO" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: orange"><b>Numero de Articulos</b></label>
      <input type="text" name="nart" class="form-control" required placeholder="NUMERO DE ARTICULOS" />
    </div>
	
	<div class="form-group">
      <label style="font-size: 14pt; color: orange"><b>Direccion</b></label>
      <input type="text" name="direccion" class="form-control" required placeholder="DIRECCION" />
    </div>
	
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="COMPRAR"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registroc.php");
		}
	?>
<!--Fin formulario compra -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>