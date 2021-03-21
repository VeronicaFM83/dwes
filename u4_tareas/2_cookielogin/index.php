<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<div class="contenedor">
		<form name="login" action="confirmacion.php" method="POST">
			<fieldset>
				<legend>Bienvenido introduce tu nombre de usuario y contraseña:</legend>
				<p><input type="text" name="nombre" maxlength="20" placeholder="Nombre"/> <!--pattern="[A-Za-z]{2,30}" placeholder="Nombre"/>--></p>
				<p><input type="password" name="clave" placeholder="Contraseña"/> <!--pattern="[A-Za-z0-9!?-]{6,12}" required/>--></p>
				<p><input type="submit" value="Enviar"/></p>
			</fieldset>
		</form>
	</div>
</form>
</body>
</html>