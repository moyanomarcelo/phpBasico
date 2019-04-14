<?php
	include 'conex.php';
	$consulta = "select descrip from tabla01 where cod = 'token01'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		$decodificado = base64_decode($columna['descrip']);
		echo $decodificado;
	}
	include 'desconex.php';
?>