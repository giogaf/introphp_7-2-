<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 2</title>
</head>
<body>
	<h2>Arreglo con 12 nombres</h2>

	<?php
	$personas=array("James R","Juan C","Carlos B","David O","Jackson M","Radamel G","Camilo Z","Teófilo G","Pablo A","Luis M","Juan Q","Jeison M");
			
	verNombres($personas);

	echo "<h3>Inserción al inicio y final</h3>";
	array_unshift($personas,"Abel A" );
	array_push($personas,"Cristian Z");
	verNombres($personas);

	echo "<h3>Eliminación posición 7</h3>";
	array_splice($personas,6,1);

	verNombres($personas);

	function verNombres($arreglo)
	{		
		foreach ($arreglo as  $item) {
			echo $item."<br>";
		}
	}
	
	?>
</body>
</html>