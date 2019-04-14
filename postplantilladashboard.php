
<html>

<?php
	
	include 'conex.php';
	
	$consulta = "update tabla01 set descrip = '".base64_encode($_POST["txtHTML"])."' where cod = 'dashboard'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	/* echo $consulta;  */
	/* echo $resultado; */
	/* echo $_POST["txtHTML"]; */
	
	include 'desconex.php';
	
	echo 'ok'; 
?> 

</html>

