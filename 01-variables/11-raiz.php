<?php
# Programa que solicite un número al usuario y 
# permita calcular la raíz cuadrada del mismo (sin usar función)

$n = (int)readline("Ingrese el número al que le quiere calcular la raiz: ");

$rta = $n**(1/2);
echo "La raiz de $n es $rta" ;

?>
