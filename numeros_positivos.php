<?php
$numeros = [];
$numeros_positivos = [];

for ($i=0; $i < 6; $i++) { 
    $numeros[$i] = fgets(STDIN); 
    if ($numeros[$i] > 0) {
        $numeros_positivos[$i] = $numeros[$i];
    } 
}

print(count($numeros_positivos) . " valores positivos") . PHP_EOL;

