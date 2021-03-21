<?php
function filtrado($datos){
	$datos = trim($datos); // Elimina espacios antes y después de los datos
	$datos = stripslashes($datos); // Elimina backslashes \
	$datos = htmlspecialchars($datos); // Traduce caracteres
	return $datos;
}

$nombre = $_POST['nombre']; // Almacena nombre introducido
$clave = $_POST['clave']; // Almacena clave introducida

if (empty($nombre)) { // Comprueba que nombre no esté vacío
	$mensaje[] = "Introduzca nombre de usuario válido <br/>";
}
if (empty($clave) || strlen($clave) < 8) { // Comprueba que clave no esté vacío o menos de 8 caracteres
	$mensaje[] = "Introduzca una contraseña válida <br/>";
}
if (empty($mensaje)) { // Si no hubo errores procede con el filtrado e inicio de sesión
	$nombre = filtrado($nombre);
	$clave = filtrado($clave);

	//Se crea o actualiza cookie.
	setcookie("nombre",$nombre,time()+60*60*24*365); // Guardamos nombre en cookie con duración 1 año
	setcookie("clave",$clave,time()+60*60*24*365); // Guardamos clave en cookie con duración 1 año
	$mensaje[] = 'Los datos introducidos son los siguientes: <br/>
	Usuario: ' . $_COOKIE['nombre'] . ' <br/>
	Contraseña: ' . $_COOKIE['clave'] . ' <br/>';
}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor - UNIDAD 4">
	<meta name="keywords" content="PHP, DWESER">
	<!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
	<title>PRÁCTICA 2. Cookies</title>
</head>
<body>
<?php

	$stringMensaje = implode($mensaje); // Pasa array a string
	echo $stringMensaje; // Muestra mensaje al usuario

?>
</body>
</html>