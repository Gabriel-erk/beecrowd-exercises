<?php

/* 
* este código está correto, porém por conta do loop "passar mais vezes que o necesário" o beecrowd não aceita
* sistema que com base na hora de incio e de fim calcula e retorna quantas horas um jogo durou
* pegar a hora de inicio e de fim do jogo na mesma linha
* calcular quantas horas ele durou com base nessas 2 informações, sabendo que a duração mínima do jogo é 1 hora e máxima 24 horas
*/

fscanf(STDIN, "%d %d", $hora_inicio_de_jogo, $hora_fim_de_jogo);

$duracao_final_jogo = 0;

if ($hora_inicio_de_jogo != $hora_fim_de_jogo && $hora_inicio_de_jogo < 24 && $hora_fim_de_jogo < 24) {
    while ($hora_inicio_de_jogo != $hora_fim_de_jogo) {
        if ($hora_inicio_de_jogo >= 24) {
            $hora_inicio_de_jogo = 0;
        }
        $hora_inicio_de_jogo++;
        $duracao_final_jogo++;
    }
} else  if ($hora_inicio_de_jogo == $hora_fim_de_jogo && $hora_inicio_de_jogo < 24 && $hora_fim_de_jogo < 24) {   
    $duracao_final_jogo = 24;
}

if ($duracao_final_jogo > 1 && $duracao_final_jogo <= 24) {
    echo "O JOGO DUROU $duracao_final_jogo HORA(S)";
} 

