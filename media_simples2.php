<?php
// floatval para garantir a integridade do nosso dado
$nota1 = floatval(fgets(STDIN));
$nota2 = floatval(fgets(STDIN));
$nota3 = floatval(fgets(STDIN));

$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5.0)) / (2.0 + 3.0 + 5.0);

echo "MEDIA = " . number_format($media, 1, '.', '') . PHP_EOL;