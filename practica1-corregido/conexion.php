<?php
			$servername = "localhost";
			$username = "consultor";
			$password = "consultor";
			$dbname = "ventas";
				// Create connection
			$enlace = mysqli_connect($servername, $username, $password, $dbname);

			if (mysqli_connect_errno()) {
				printf("Conexión fallida: %s\n", mysqli_connect_error());
				exit();
			}

?>