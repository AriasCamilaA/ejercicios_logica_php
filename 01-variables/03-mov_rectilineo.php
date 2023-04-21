<?php
# Programa para calcular la distancia recorrida en un movimiento rectilíneo. 
# Recuerde x=v*t donde v es velocidad y t es tiempo. 
# Solicitar al usuario velocidad en kilómetros por hora (Km/h) 
# y tiempo en horas (h) para obtener la distancia en kilómetros (Km).

$v = (float) readline("Ingrese la velocidad en Km/h: ");
$t = (float) readline("Ingrese el tiempo en horas: ");

$distancia = $v * $t;

echo "La distancia que recorrió en $t horas a una velocidad de $v Km/h fue de $distancia Km";
?>
