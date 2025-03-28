<?php

$nome_vendedor = fgets(STDIN);
$salario_fixo_vendedor = floatval(fgets(STDIN));
$vendas_mes_em_dinheiro = floatval(fgets(STDIN));

$comissao_final_mes = $vendas_mes_em_dinheiro * 0.15;
$salario_final_com_comissao = $salario_fixo_vendedor + $comissao_final_mes;

echo "TOTAL = R$ " . number_format($salario_final_com_comissao, 2, '.', '') . PHP_EOL;
