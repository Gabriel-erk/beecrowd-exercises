<?php

$numero_funcionario = fgets(STDIN);
$horas_trabalhadas = fgets(STDIN);
$valor_hora = floatval(fgets(STDIN));

$salario = $horas_trabalhadas * $valor_hora;

echo "NUMBER = $numero_funcionario";
echo "SALARY = U$ " . number_format($salario, 2, '.', '') . PHP_EOL;


