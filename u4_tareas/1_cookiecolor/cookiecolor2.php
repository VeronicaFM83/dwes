<?php
if ($_POST['radio']=="rojo")
	setcookie("color","red",time()+60*60*24*365);
elseif ($_POST['radio']=="verde")
       setcookie("color","#00ff00",time()+60*60*24*365);
elseif ($_POST['radio']=="azul")
       setcookie("color","#0000ff",time()+60*60*24*365);
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se crea la cookie.
<br>
<a href="cookiecolor1.php">Ir a la otra web</a>
</body>
</html>

