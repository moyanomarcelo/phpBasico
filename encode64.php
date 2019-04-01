<?php
$texto = "Hola mundo";
$codificado = base64_encode($texto);
$decodificado = base64_decode($codificado);
echo $decodificado."<br />"; //Se muestra Hola mundo
echo $codificado; //Se muestra SG9sYSBtdW5kbw==
?>