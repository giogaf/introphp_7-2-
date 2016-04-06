<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="">
	<script  src=""></script>
</head>
<body>
	<?php
	function suma($s,$p){
		return $s+$p;
	}
	$base = $_POST['base'];
	$exp = $_POST['exp'];	
	$parcial=$base;
	for ($i=1; $i <$exp; $i++) {
		$suma=0;
		for ($j=1; $j <=$base ; $j++) { 
		$suma= suma($suma,$parcial);
		}
		$parcial=$suma;

	}

	echo $base.", elevado a ". $exp. ", es igual a: ", $suma; 
	?>
</body>
</html>