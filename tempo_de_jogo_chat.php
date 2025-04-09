<?php

/*
* da pra fazer sem loop para evitar erro no beecrowd
* caso os horários forem iguais, foram 24 horas de jogo
* caso o íncio for menor que o fim, subtrai o fim do do ínicio
* caso o fim for maior que ínicio, significa que passou da meia noite, nesse caso, comparar quantas horas faltou para meia noite e depois somar com o fim (subtrai 24(qntd de horas de um dia) pelo ínicio)
*/

fscanf(STDIN, "%d %d", $inicio, $fim);
$duracao_final_jogo = 0;

if ($inicio == $fim) {
    $duracao_final_jogo = 24;
} else if ($inicio < $fim) {
    // pior que se fazer as contas realmente dá certo, se começa as 10, termina 12, e vc subtrair o horário que termina pelo de ínicio você descobre quantas horas durou o jogo, é meio que uma fórmula também
    $duracao_final_jogo = $fim - $inicio;
} else {
    // se não for nada acima é porque o ínicio é maior que o fim, nesse caso, passou de meia noite, se passou, por ex, inicia as 10, termina 2 da manha, realiza as contas de quanto falta para meia noite, ou seja, 24 horas - horário de inicio de jogo, depois soma com as hora que termina (assim meio que fazendo que o horário de inicio atinja o horário do fim, verificando a diferença concreta entre eles, assim como eu tava fazendo com loop no outro exercício)
    $duracao_final_jogo = (24 - $inicio) + $fim;
}

echo "O JOGO DUROU $duracao_final_jogo HORA(S)" . PHP_EOL;