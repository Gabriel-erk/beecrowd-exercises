<?php

fscanf(STDIN, "%s %s %s", $a, $b, $c);

// seguindo a fórmula, se isso for verdade, significa que é um triângulo
if ($a < ($b + $c)  && $b < ($a + $c) && $c < ($a + $b)) {
    $perimetro_triangulo = $a + $b + $c;
    echo "Perimetro = " . number_format($perimetro_triangulo, 1, "."," "). PHP_EOL;
} else {
    $area_trapezio = (($a + $b) * $c) / 2;
    echo "Area = " . number_format($area_trapezio, 1, ".", " ") . PHP_EOL;
}
