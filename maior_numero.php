<?php

// coletando números
fscanf(STDIN, "%d %d %d", $a, $b, $c);

$maiorAB = ($a > $b) ? $a : $b;

$encontraMaior = ($maiorAB > $c) ? $maiorAB : $maiorAB =  $c;

echo "$encontraMaior eh o maior" . PHP_EOL;