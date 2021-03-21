<?php

	$color = $_POST['color'];
	setcookie("color",$color,time()+3600);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor - UNIDAD 4">
	<meta name="keywords" content="PHP, DWESER">
	<title>PRÁCTICA 1. Cookies</title>
</head>

<body>
	<div class="contenedor">
		<form action="practica4-1_post.php" method="POST">

	
		<p>Se crea la cookie</p>
		<a href="practica4-1.php">Ir a la otra web</a>

		<?php
		/*
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