<?php

$var1 = $_SERVER['REQUEST_TIME'];

echo "_SERVER['REQUEST_TIME']--> ";
echo $var1;
echo "--> ";
echo "round--> ";
echo round($var1/32400); // 32400 segundos = 9hs

?>