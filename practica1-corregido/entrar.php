<?php
?>
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<?php
		    //primer cambio
			if (isset($_POST['boton'])) {
				session_start();
				//cargamos usuario y pass en variables de sesion
				$_SESSION['usu'] = $_POST['usu'];
				$contencrip =hash_hmac('sha512',$_POST['pass'], 'primeraweb');
				$_SESSION['pass']=$contencrip;
				require("conexion2.php");
				   $usuario = "SELECT usuario,password,rol FROM usuarios WHERE usuario ='$_SESSION[usu]' AND password='$_SESSION[pass]'";	
					$dato = mysqli_query($enlace, $usuario);
    				$fila = mysqli_fetch_assoc($dato);
    				$_SESSION['r'] = $fila["rol"];
    			  // si no se ha encontrado usuario rol vacio
    			mysqli_close($enlace);
    				if (empty($_SESSION['r'])){
					      echo "Se esta intentando validar como el usuario " . $_SESSION['usu'] . " con el rol " . $_SESSION['r'];
					      echo "</br>El usuario introducido no existe, validese de nuevo";
				    }else{
				    	
					    echo "Se esta intentando validar como el usuario " . $_SESSION['usu'] . " con el rol " . $_SESSION['r'];
	    				echo "</br>Conectará a la BD como " . $_SESSION['r'] . "</br>";
	    				?>
					        </br>
							  <a  href='articulos.php'>Crear articulo</a>
							</br>
							  <a  href='datos.php'>Ver datos</a>
					    <?php
				    	}
				     	
				    }
	else {
		?>
		
	</head>

	<body>
		<form action="entrar.php" method="post">
			Login de usuario: <input type="text" name="usu" required>
			Clave: <input type="text" name="pass" required>
			<input type="submit" name="boton" value="Iniciar Sesion">
		</form>	
		<?php
     }
		?>
	</body>

</html>