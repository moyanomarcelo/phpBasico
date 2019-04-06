<?php

	$usuario = getenv("ENV_USUARIO");
	$password = getenv("ENV_PASSWORD");
	$servidor = getenv("ENV_SERVIDOR");
	$basededatos = getenv("ENV_BASEDEDATOS");
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = base64_decode($_GET["token"]);
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	echo 'ok';
	// cerrar conexión de base de datos
	mysqli_close( $conexion );
?>