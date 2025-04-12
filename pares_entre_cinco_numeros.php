<?php

$numeros = [];
$numeros_pares = [];

for ($i=0; $i < 5; $i++) { 
    $numeros[$i] = intval(fgets(STDIN));
    if ($numeros[$i] % 2 == 0) {
        $numeros_pares[$i] = $numeros[$i];
    }
}

echo count($numeros_pares) . " valores pares" . PHP_EOL;