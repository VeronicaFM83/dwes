<?php
session_start();
  if ($_SESSION['r']=="administrador") {
             require("conexion2.php");
              
            }
            else {
             require("conexion.php");
            }
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">


	<?php

	  echo "Usuario " . $_SESSION['usu'] . " con el rol " . $_SESSION['r'];
    echo "</br>Conectará a la BD como " . $_SESSION['r'] . "</br>";
	 if (isset($_POST['anadir'])) {
			 	
    $_SESSION['desc']=$_POST['desc'];
	 	$_SESSION['precio']=$_POST['precio'];
	 	$_SESSION['carac']=$_POST['carac'];

    		$insertar = "INSERT INTO articulos (descripcion, precio, caracteristicas) VALUES ('$_SESSION[desc]', $_SESSION[precio], '$_SESSION[carac]')";
    		if (mysqli_query($enlace, $insertar)) {
      			echo "Articulo agregado con exito";
      			echo "</br><a href='articulos.php'>Volver a la pagina anterior</a>";
			  } else {
      			echo "Error: " . $insertar . "<br>" . mysqli_error($enlace);
			    }

  }
    ?>
</head>

<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
		Descripcion: <input type="text" name="desc"></br>
		Precio: <input type="text" name="precio"></br>
		Caracteristicas: <input  type="text" name="carac"></br>

		<input type="submit" value="Añadir articulo" name="anadir">
  	<input type="button" value="Ver articulos" name="ver" onclick= "window.location.href='datos.php'"> <!-- Solución rápida con Javascript -->

  </form>
  

</br>
  <a  href='index.php'>Volver a la pagina anterior</a>
</body>

<?php
    


?>
</html>