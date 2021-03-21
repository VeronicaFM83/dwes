<?php
			$servername = "localhost";
			$username = "administrador";
			$password = "administrador";
			$dbname = "ventas";
				// Create connection
			$enlace = mysqli_connect($servername, $username, $password, $dbname);

			if (mysqli_connect_errno()) {
				printf("Conexión fallida: %s\n", mysqli_connect_error());
				exit();
			}

?>