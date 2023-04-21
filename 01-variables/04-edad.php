<?php
# Programa que permita calcular la edad de una persona conociendo
# el año actual y el usuario digita su año de nacimiento

$actual = 2022;
$born = (int) readline("Ingrese el año en que nació: ");
echo "Usted tiene " . ($actual - $born) . " años de edad";
?>
