<?php
	
	include 'conex.php';
	
	/* --- */ /* --- */ /* --- */
	
	$encontrado1 = false;
	$encontrado2 = false;
	$encontrado3 = false;
	$encontrado4 = false;
	$encontrado5 = false;
	$encontrado6 = false;
	$encontrado7 = false;
	$encontrado8 = false;
	$encontrado9 = false;
	$encontrado10 = false;
	
	/* --- */ /* --- */ /* --- */
	// Buscar txtHTML de dashboard
	$consulta = "select descrip from tabla01 where cod = 'dashboard'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		$decodificado = base64_decode($columna['descrip']);
		// echo $decodificado;
	}
	/* --- */ /* --- */ /* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array01@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array01'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray01 = base64_decode($columna['descrip']);
			$encontrado1 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array02@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array02'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray02 = base64_decode($columna['descrip']);
			$encontrado2 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array03@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array03'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray03 = base64_decode($columna['descrip']);
			$encontrado3 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array04@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array04'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray04 = base64_decode($columna['descrip']);
			$encontrado4 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array05@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array05'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray05 = base64_decode($columna['descrip']);
			$encontrado5 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array06@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array06'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray06 = base64_decode($columna['descrip']);
			$encontrado6 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array07@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array07'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray07 = base64_decode($columna['descrip']);
			$encontrado7 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array08@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array08'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray08 = base64_decode($columna['descrip']);
			$encontrado8 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array09@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array09'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray09 = base64_decode($columna['descrip']);
			$encontrado9 = true;
		}
	}
	/* --- */
	// Buscar cadena '@array99@' en $decodificado
	$pos = strpos($decodificado, '@array10@');
	if ($pos !== false) {
		// La cadena fue encontrada
		$consulta = "select descrip from tabla01 where cod = 'array10'";
		$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
		while ($columna = mysqli_fetch_array( $resultado ))
		{
			$valorarray10 = base64_decode($columna['descrip']);
			$encontrado10 = true;
		}
	}

	
	/* --- */ /* --- */ /* --- */

	// Hacer los Remplazos de arrays
	if ($encontrado1 == true) {
		$decodificado = str_replace("@array01@", $valorarray01, $decodificado);
	}
	if ($encontrado2 == true) {
		$decodificado = str_replace("@array02@", $valorarray02, $decodificado);
	}
	if ($encontrado3 == true) {
		$decodificado = str_replace("@array03@", $valorarray03, $decodificado);
	}	
	if ($encontrado4 == true) {
		$decodificado = str_replace("@array04@", $valorarray04, $decodificado);
	}
	if ($encontrado5 == true) {
		$decodificado = str_replace("@array05@", $valorarray05, $decodificado);
	}
	if ($encontrado6 == true) {
		$decodificado = str_replace("@array06@", $valorarray06, $decodificado);
	}
	if ($encontrado7 == true) {
		$decodificado = str_replace("@array07@", $valorarray07, $decodificado);
	}	
	if ($encontrado8 == true) {
		$decodificado = str_replace("@array08@", $valorarray08, $decodificado);
	}
	if ($encontrado9 == true) {
		$decodificado = str_replace("@array09@", $valorarray09, $decodificado);
	}
	if ($encontrado10 == true) {
		$decodificado = str_replace("@array10@", $valorarray10, $decodificado);
	}
	
	/* --- */ /* --- */ /* --- */
	
	echo $decodificado;
	
	/* --- */ /* --- */ /* --- */
	
	include 'desconex.php';

?> 
