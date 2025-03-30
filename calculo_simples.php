<?php

/*
* função fscanf permite que eu tenha mais de uma entrada de dados em uma única linha, separados por espaço entre eles 
* STDIN diz que a entrada de dados será através da entrada default (padrão), que é o teclado
* dentro do aspas as letras com % indicam que estarei recebendo 3 valores na mesma linha onde %s diz que receberei uma string %d um número inteiro e %f um número do tipo float/double 
* $cod_peca1, $numero_pecas1, $valor_unitario_peca1 são as váriaveis que receberam os valores de entrada, em ordem (o valor de s para cod, de D para numero e F para valor unitario)
*/
fscanf(STDIN, "%s %d %f", $cod_peca1, $numero_pecas1, $valor_unitario_peca1);
fscanf(STDIN, "%s %d %f", $cod_peca2, $numero_pecas2, $valor_unitario_peca2);

$valor_a_pagar = $numero_pecas1 * $valor_unitario_peca1 + $numero_pecas2 * $valor_unitario_peca2;

echo "VALOR A PAGAR: R$ " . number_format($valor_a_pagar, 2, '.', ''). PHP_EOL;