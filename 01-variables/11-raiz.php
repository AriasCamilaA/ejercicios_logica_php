<?php
# Programa que solicite un número al usuario y 
# permita calcular la raíz cuadrada del mismo (sin usar función)

$n = (int)readline("Ingrese el número al que le quiere calcular la raiz: ");
$i = $r = 0;
while ($r <= $n) {
    $i++;
    $r = $i ** 2;
}
$i--;
$r = $i ** 2;

if ($i ** 2 != $n) {
    for ($f = 0; $f < 8; $f++) {
        $sum = 1 / (10 ** $f);
        while ($r <= $n) {
            $i += $sum;
            $r = $i ** 2;
        }
        $i -= $sum;
        $r = $i ** 2;
    }
}

echo "La raiz de " . $n . " es " . $i . " ---->" . sqrt($n);

?>