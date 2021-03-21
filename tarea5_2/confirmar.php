<?php
	// Se inicia la sesión
	session_name("login");
	session_start();

	if(isset($_COOKIE['carrito'])) {
		setcookie("carrito",$_COOKIE['carrito'],time()+3600);
		$carrito =  unserialize($_COOKIE['carrito'], ["allowed_classes" => false]);
		//echo "<p> La cookie ya existe </p>";
		//echo "<p> El valor de la Cookie 'carrito' es ".var_export($_COOKIE['carrito'])." </p>";
	} else {
		//echo "No existe cookie, se crea";
		$carrito = array();
		setcookie("carrito",serialize($carrito),time()+3600);
	}



	// FUNCIÓN para mostrar elementos del carrito

	function muestraCarrito($array) {
		// Se recorre Array para mostrar contenido
		$i = 0;
		foreach($array as $contenido)
    		{
				echo "<p>1 " . $contenido . "</p>";
				$i++;
    		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor - Practica 5">
	<meta name="keywords" content="PHP, DWESER">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Confirmar</title>
</head>

<body>

<div class="confirmar">
	<h1>Felicidades</h1>
	<h3>Usted acaba de adquirir</h3>

	<div class="carrito">

			<?php
			muestraCarrito($carrito); // Llamamos función para mostrar elementos del carrito
			?>

	</div>
	<h3>Gracias por su compra</h3>

	<a href="formulario.php">Terminar</a>


</div>
</body>
</html>
