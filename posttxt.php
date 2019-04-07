
<html>

<?php
	$usuario = getenv("ENV_USUARIO");
	$password = getenv("ENV_PASSWORD");
	$servidor = getenv("ENV_SERVIDOR");
	$basededatos = getenv("ENV_BASEDEDATOS");
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	$consulta = "update tabla01 set descrip = '".base64_encode($_POST["txtHTML"])."' where cod = 'dashboard01'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	/* echo $consulta;  */
	/* echo $resultado; */
	/* echo $_POST["txtHTML"]; */
	
	mysqli_close( $conexion );
	
	echo 'ok'; 
?> 

</html>

