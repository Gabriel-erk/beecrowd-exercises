<?php

/* 
* 15% aumento até 400.00
* 12% de 400.01 até 800.00 (mesmo esquema de decimais nos em diante)
* 10% até 1200.00
* 7%  até 2000.00
* 4% acima de 2000.00
*/

/* 
* pegar salário do funcionário, calcular e mostra o novo com base na tabela acima
* mostrar também valor aumentado
* e percentual que foi aplicado
*/

// não vai retornar nada, então vai ser uma subrotina
function calcula_aumento_salario(float $salario_funcionario, float $percentual_aumento) 
{
    $reajuste_ganho = $salario_funcionario * $percentual_aumento;
    $salario_funcionario += $reajuste_ganho;
    echo "Novo salario: " . number_format($salario_funcionario,2,'.', '') . PHP_EOL;
    echo "Reajuste ganho: " . number_format($reajuste_ganho,2, '.','') . PHP_EOL;
    echo "Em percentual: " . $percentual_aumento * 100 . " %"  . PHP_EOL;
}

$salario_funcionario = floatval(fgets(STDIN));
$percentual_aumento = 0;

if ($salario_funcionario <= 400.00) {
    $percentual_aumento = 0.15;
    calcula_aumento_salario($salario_funcionario, $percentual_aumento);
} else if ($salario_funcionario >= 400.01 && $salario_funcionario <= 800.00) {
    $percentual_aumento = 0.12;
    calcula_aumento_salario($salario_funcionario, $percentual_aumento);
} else if ($salario_funcionario >= 800.01 && $salario_funcionario <= 1200.00) {
    $percentual_aumento = 0.10;
    calcula_aumento_salario($salario_funcionario, $percentual_aumento);
} else if ($salario_funcionario >= 1200.01 && $salario_funcionario <= 2000.00) {
    $percentual_aumento = 0.07;
    calcula_aumento_salario($salario_funcionario, $percentual_aumento);
} else {
    $percentual_aumento = 0.04;
    calcula_aumento_salario($salario_funcionario, $percentual_aumento);
}
