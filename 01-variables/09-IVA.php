<?php
# Programa que permita a una tienda saber el valor que pagara 
# un cliente por la compra de varios elementos de la misma 
# referencia. Debe tener como entradas el valor unitario, la 
# cantidad de productos comprados y al valor final se debe 
# adicionar el 16% correspondiente al IVA
$v_unitario = (float) readline("Ingrese el valor unitario del producto: ");
$cantidad = (int) readline("Ingrese la cantidad de productos: ");
$total = $v_unitario * $cantidad;
$total += 0.16 * $total;
echo "El precio total a pagar es de $" . number_format($total, 2);
?>
