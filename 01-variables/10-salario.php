<?php
# Programa que permita determinar el salario a pagar a un 
# empleado, teniendo como entradas el salario diario y el 
# número de días trabajados. Tenga en cuenta que al empleado 
# se le debe descontar el 10% por concepto de pensión y 15% 
# por concepto de salud.
$salario_diario = floatval(readline("Ingrese cual es su salario diario: "));
$dias = intval(readline("Ingrese cuantos dias trabajo: "));

$salario = $salario_diario * $dias;
$salario -= 0.1 * $salario + 0.15 * $salario;

echo "Su salario es: $salario";
?>
