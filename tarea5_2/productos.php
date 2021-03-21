<?php
	// Se inicia la sesión
	session_name("login");
	session_start();
	

//Obtenemos los productos anteriores - NO FUNCIONA

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


	// Array de artículos

	$articulos = array(
		array("Producto"=>"TV","Descripción" => "22 pulgadas","Precio" => "210€"),
		array("Producto"=>"Movil","Descripción" => "4g","Precio" => "300€"),
		array("Producto"=>"MP4","Descripción" => "20Gb","Precio" => "13€"),
		array("Producto"=>"Ratón","Descripción" => "6000dpi","Precio" => "20€"),
		array("Producto"=>"Alfombrilla","Descripción" => "Negra","Precio" => "30€"),
		array("Producto"=>"USB","Descripción" => "2GB","Precio" => "5€"),
		array("Producto"=>"TV 4K","Descripción" => "43 UltraHD","Precio" => "459,99€"),
		array("Producto"=>"Blueray","Descripción" => "Negro","Precio" => "79€"),
		array("Producto"=>"iPod","Descripción" => "Blanco","Precio" => "342,81€")
	);


	// FUNCIÓN para mostrar elementos del carrito

	function muestraCarrito($array) {
		// Se recorre Array para mostrar contenido
		$i = 0;
		foreach($array as $contenido)
    		{
				echo "<p>1 " . $contenido . " <button type='submit' name='borrar' value='$i'> Quitar </button> </p>";
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
	<title>Productos</title>
</head>

<body>

<div class="contenedor">
	<?php	
	if (isset($_POST['nombre'])){
		$_SESSION['nombre'] = $_POST['nombre'];
		echo "Bienvenid@ " . $_SESSION['nombre'];
	} else {
		echo "Bienvenid@ invitado/a";
	}
	?>

	<div class="articulos">
		<form name="productos" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<?php

			// Se recorre Array

			foreach($articulos as $fila)
			{
				echo "<div class='articulo'>";
	    		foreach($fila as $campo => $valor)
	    		{
					echo "<p> $campo: <b>$valor</b> </p>"; // Escribimos para campo (producto, desc, precio) y valor (TV, 22 pulgadas, 210€...) de cada subArray
	    		}

	    		echo "<button type='submit' name='boton' value='$fila[Producto]'> añadir al carro </button>"; // Añadimos el botón
	    		echo "</div>";
			}

			?>
		</form>
	</div>	
	<div class='carrito'>
		<form name="cesta" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

			<?php

			print "<h2> Carro </h2>";

			if(isset($_COOKIE['carrito']) && !(isset($_POST["boton"])) && !(isset($_POST["borrar"])) && !(isset($_POST["borraCookie"]))) {
				setcookie("carrito",serialize($carrito),time()+3600);
				//print "<h2> Carro </h2>";
				$carrito =  unserialize($_COOKIE['carrito'], ["allowed_classes" => false]);
				muestraCarrito($carrito); // Llamamos función para mostrar elementos del carrito
			}

			if(isset($_POST["boton"])) { // Si se pulsa botón de un artículo
				//var_dump($_POST); //DEBUG: Devuelve todo POST
				$carrito[] = $_POST["boton"]; // Añadimos a array de carrito
				//var_export($carrito); //DEBUG: Muestra contenido array
				$_COOKIE['carrito'] = $carrito; // Graba el array en la cookie "carrito"
				
				muestraCarrito($_COOKIE['carrito']); // Llamamos función para mostrar elementos del carrito			
				

		    	setcookie("carrito",serialize($carrito),time()+3600);				
			}

			// Borrado de elemento de carrito

			if(isset($_POST["borrar"])) {
				//print "<h2> Carro </h2>";
				//var_export($carrito);
				$posicion = $_POST["borrar"];
				unset($carrito[$posicion]); //Pretendo borrar el elemento concreto por su posición en el array
				$carrito = array_values($carrito); // Reoderno posiciones de array tras borrado	
				$_COOKIE['carrito'] = $carrito; // Actualizo cookie
				
				muestraCarrito($_COOKIE['carrito']); // Llamamos función para mostrar elementos del carrito	
				
		    	setcookie("carrito",serialize($carrito),time()+3600);
			}


			// BOTÓN BORRAR COOKIE
			/*
			echo "<p><button type='submit' name='borraCookie' value='borraCookie'> Borrar cookie </button> </p>";
			if(isset($_POST["borraCookie"])) {
				 setcookie("carrito", "", time() - 1 );;
			}
			*/

			?>
		</form>
	</div>

		<form action="confirmar.php" method="POST">
			<input type="submit" value="confirmar compra"/>
		</form>



</div>
</body>
</html>
