<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

</head>
<body>
  <?php 
 
	require("conexion.php");
	$q = "SELECT * FROM articulos";
	$dato = mysqli_query($enlace, $q);
	 //verificamos si el user exite con un condicional
	echo "Listado de articulos</br>";
	
	while ($row = mysqli_fetch_assoc($dato)) {
	  
	  echo "Descripcion: " . $row["descripcion"] . "&nbsp;&nbsp;&nbsp;";
	  echo "Precio: " . $row["precio"] . "&nbsp;&nbsp;&nbsp;";
	  echo "Caracteristicas: " . $row["caracteristicas"] . "&nbsp;&nbsp;&nbsp;";
	  echo "</br>";         
	}
	
	echo "</br><a  href='index.php'>Volver a la pagina principal</a>";
	
	mysqli_close($enlace);
	 
 
?>
</body>
</html>