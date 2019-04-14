<?php
$mystring = 'abc';
$findme   = 'x';
$pos = strpos($mystring, $findme);

// El operador !== también puede ser usado. Puesto que != no funcionará como se espera
// porque la posición de 'a' es 0. La declaración (0 != false) se evalúa a 
// false.
if ($pos !== false) {
     echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
         echo " y existe en la posición $pos";
} else {
     echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
}

?>