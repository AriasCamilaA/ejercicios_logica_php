<?php

// Solicitar tiempo en segundos y transformar a horas y minutos
$seg = (int) readline("Ingrese los segundos: ");

$min = (int) ($seg / 60);
$hor = (int) ($min / 60);
$min -= $hor * 60;
$seg_f = $seg - $hor * 3600 - $min * 60;

echo "{$seg} equivalen a {$hor} hh: {$min} mm: {$seg_f} ss";
