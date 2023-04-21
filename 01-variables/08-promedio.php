<?php
# Programa para calcular el área de un cuadrado, la longitud de un lado la ingresa el usuario
$cont = 0;
for ($i = 1; $i <= 5; $i++) {
    $cont += (int) readline("Ingrese el número $i: ");
}
echo "El promedio es " . ($cont / 5);
?>
