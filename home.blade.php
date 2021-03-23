<html>
<head>
<title>Mi Web</title>
</head>
<body>
<h1>HOLA</h1>
{{-- Este comentario no se mostrará en HTML --}}
@php
$name = "Tuko";
@endphp

Hola {{ $name }}.
La hora actual es {{ time() }}.

@for ($i = 0; $i < 10; $i++)
	El valor actual es {{ $i }}
@endfor
@php
		$contador = 1;
@endphp


@while ($contador < 4)
	<p>Soy un bucle while infinito!</p>
	<p>El valor actual es {{ $contador }}</p>
	@php 
		$contador++;
	@endphp
@endwhile


@php
$users = array(
	array(
		'name' => 'usuario1',
		'id'=> '1',
		),
	array(
		'name' => 'usuario2',
		'id'=> '2',
		)
);
foreach ($users as $user) {
	echo "<p>Usuario " . $user['name'] . " con identificador: </p>" ;
}
@endphp



<form action="entrar.php" method="post">
			Login de usuario: <input type="text" name="usu" required>
			Clave: <input type="text" name="pass" required>
			<input type="submit" name="boton" value="Iniciar Sesion">
</form>	


</body>
</html>