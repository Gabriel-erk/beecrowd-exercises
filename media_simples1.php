<?php
// floatval para garantir a integridade do nosso dado
$nota1 = floatval(fgets(STDIN));
$nota2 = floatval(fgets(STDIN));

$media = (($nota1 * 3.5) + ($nota2 * 7.5)) / (3.5 + 7.5);

echo "MEDIA = " . number_format($media, 5, '.', '') . PHP_EOL;