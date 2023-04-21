<?php
// Solicitar al usuario una distancia en metros y transformar a km., cm. o mm
$m = floatval(readline("Ingrese la distancia en metros: "));
echo "Equivale a" . PHP_EOL;
echo "\t" . ($m / 1000) . " Km" . PHP_EOL;
echo "\t" . ($m * 100) . " cm" . PHP_EOL;
echo "\t" . ($m * 1000) . " mm" . PHP_EOL;
?>
