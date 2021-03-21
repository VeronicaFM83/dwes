<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Verónica Fernández Menéndez">
	<meta name="description" content="Desarrollo web entornos servidor - Practica 5">
	<meta name="keywords" content="PHP, DWESER">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Formulario</title>
</head>

<body>
<form action="productos.php" method="POST">
<div class="contenedor">
	<h1>Bienvenido a la tienda</h1>
	<p><label>Ingrese su nombre: </label><input type="text" name="nombre" pattern="[a-zA-Z]{?}" /> <input type="submit" value="Ingresar"/></p>
</div>
</form>
</body>
</html>