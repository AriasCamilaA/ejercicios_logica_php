<?php
$cont = 0;
for ($i = 1; $i <= 5; $i++) {
    $cont += (int) readline("Ingrese el número $i: ");
}
echo "El promedio es " . ($cont / 5);
?>
