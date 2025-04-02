<?php

$tempoViagem = intval(fgets(STDIN));  // tempo em horas
$velocidade_media = intval(fgets(STDIN)); // velocidade em km/h
$distancia_percorrida = $tempoViagem * $velocidade_media; // descobrindo quantos km foram percorridos

echo number_format($distancia_percorrida  / 12, 3, '.', '') . PHP_EOL ; // imprimindo a quantidade de litros necessária para realizar a viagem, divindo a distancia percorrida pela quantidade de litros por km que o nosso carro consegue rodar