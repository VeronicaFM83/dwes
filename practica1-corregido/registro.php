<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">

	<?php
  

  if (isset($_POST['boton'])) {
    
    if ($_POST['cont'] == $_POST['cont2']) {
      
      require("conexion2.php");

      $contencrip =hash_hmac('sha512',$_POST['cont'], 'primeraweb');

      $insertar = "INSERT INTO usuarios (usuario, password, rol) VALUES ('$_POST[usu]', '$contencrip', '$_POST[rol]')";

      if (mysqli_query($enlace, $insertar)) {
          echo "<p>Registrando sus datos</p>";
          echo "El registro se ha creado correctamente</br>";
          echo "El nombre guardado es " . $_POST['usu'] . "</br>";
          echo "La contrase&ntilde;a sin encriptar es " . $_POST['cont'] . "</br>";
          echo "La contrase&ntilde;a encriptada es " . $contencrip . "</br>";
          echo "</br><a href='index.php'>Volver a la pagina de inicio</a>";
      }else{
          echo "Error: " . $insertar . "<br>" . mysqli_error($enlace);
          echo "</br><a href='registro.php'>Volver a la pagina anterior</a>";
      }
    }else{
      echo"Las contrase&ntilde;as deben ser iguales, por favor intentelo de nuevo.</br>";
      echo "<a href='registro.php'>Volver a la pagina anterior</a>";
    }


  }else{


?>


</head>

<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<p>Formulario de registro</p>
		
    <strong>Login del usuario: </strong><input type="text" name="usu">
    </br>
    <strong>Clave: </strong><input type="password" name="cont">
  		</br>
    <strong>Repetir Clave: </strong><input type="password" name="cont2">
      </br>
   <input type="radio" name="rol" value="consultor"> Consultor<br>
   <input type="radio" name="rol" value="administrador"> Administrador<br>
      <input name ="boton" type="submit" value="Registrate">
   
    </br>
	</form>
<a href='index.php'>Volver a la pagina anterior</a>

</body>

<?php

}

?>

</html>