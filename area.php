<?php

fscanf(STDIN, "%f %f %f", $a, $b, $c);

$pi =  3.14159;

echo "TRIANGULO: " . number_format(($a * $c) / 2,3,'.','') . PHP_EOL;
echo "CIRCULO: " . number_format($pi * $c ** 2,3,'.','') . PHP_EOL;
echo "TRAPEZIO: " . number_format((($a + $b) * $c) / 2,3,'.','') . PHP_EOL;
echo "QUADRADO: " . number_format($b ** 2,3,'.','') . PHP_EOL;
echo "RETANGULO: " . number_format($a * $b,3,'.','') . PHP_EOL;