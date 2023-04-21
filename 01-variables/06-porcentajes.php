<?php

# Programa que permita calcular el 30%, el 60% y el 90% de cualquier número

$a = (float) readline("Ingrese el número que desea calcularle los porcentajes: ");
$porcentaje = $a * 0.3;
echo "El 30% de $a es $porcentaje\n";
echo "El 60% de $a es " . ($porcentaje * 2) . "\n";
echo "El 90% de $a es " . ($porcentaje * 3);
?>
