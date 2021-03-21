<?php

	if(isset($_COOKIE['color'])) {
		$color =  $_COOKIE['color'];
	} else {
		$color = "rgb(0,255,0)";
	}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor - UNIDAD 4">
	<meta name="keywords" content="PHP, DWESER">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
	<style type="text/css">

		<?php
			echo "body {background-color: " . $color . ";}";
		?>

	</style>
	<title>PRÁCTICA 1. Cookies</title>
</head>

<body>
	<div class="contenedor">
		<form action="practica4-1_post.php" method="POST">

	
		<p><label>Seleccione de que color desea que sea la web de ahora en adelante: </label></p>
		<p><input type="radio" name="color" value="red" /> Rojo</p>
		<p><input type="radio" name="color" value="rgb(0,255,0)" /> Verde</p>
		<p><input type="radio" name="color" value="blue" /> Azul</p>
		<p><input type="submit" value="Crear cookie"/></p>

		<?php/*
		// BOTÓN BORRAR COOKIE
			
			echo "<p><button type='submit' name='borraCookie' value='borraCookie'> Borrar cookie </button> </p>";
			if(isset($_POST["borraCookie"])) {
				 setcookie("color", "", time() - 1 );;
			}
		*/	
		?>
		</form>
	</div>
</form>
</body>
</html>