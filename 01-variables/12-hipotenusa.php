<?php
# Calcular la hipotenusa con el Teorema de Pitágora
$a = intval(readline("Ingrese el valor del primer cateto: "));
$b = intval(readline("Ingrese el valor del segundo cateto: "));

$h = sqrt(($a ** 2) + ($b ** 2));

echo "La hipotenusa de un triangulo cuyos catetos son $a y $b es $h";
?>
