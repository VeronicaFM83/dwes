<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor">
	<meta name="keywords" content="PHP">
	<title>LOGIN</title>
</head>
<body>
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

	session_start(); //Se inicia la sesión.
	$_SESSION['name'] = $nombre;
	$_SESSION['password'] = $clave;
	$mensaje[] = 'Los datos introducidos son los siguientes: <br/>
	Usuario: ' . $_SESSION['name'] . ' <br/>
	Contraseña: ' . $_SESSION['password'] . ' <br/>';
}
$stringMensaje = implode($mensaje); // Pasa array a string
echo $stringMensaje; // Muestra mensaje al usuario
?>
</body>
</html>