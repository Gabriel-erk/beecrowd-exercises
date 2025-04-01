<?php

$distancia_em_km = intval(fgets(STDIN));

echo $distancia_em_km * 2 . ' minutos' . PHP_EOL;
/* 
* carro x (60km/h) - carro y (90km/h)
* em uma hora carro y se distância 30 km do carro x ou seja
* carro y se afasta 1 km do carro x a cada 2 minutos (conta para descobrir esse resultado = tempo / km percorrido = 2 minutos para cada km)
* armazenar número inteiro que representa os km percorridos
* descobrir quanto tempo o carro y leva para tomar essa distância do outro carro (essa distância se refere a distância que pedi para o usuário digitar)
* quanto tempo o carro y (a 90km/h) levaria em minutos para ultrapassar a distância que o usuário digitou?
* considerando que o carro da disttancia percorrida está a 30km/h e a cada 2 minutos o carro y se distância 1km deste carro, pode-se dizer que
* tempoEmMinutosParaUltrapassarCarroComDistanciaDigitadaPeloUsuario = $distanciaDigitadaPorUsuario (ex: 30) * minutos (2, pois um carro em 90km/h contra um carro a 60km/h, são 2 minutos para o y se distanciar 1km dele, então 1km de distância, 2 minutos e para o carro y de distanciar 30km (como inserido pelo usuário) é o resultado da multiplicação do valor digitado por 2, pois são 2 minutos para 1 km) então para o caro y chegar nessa distância são 60 minutos (pois, no primeiro km, são 2 minutos, no segundo km 2 minutos (acumulando 4), no terceiro km 2 minutos (acumulando 6) e etc..)
* resumindo, a pergunta correta seria: quanto tempo o carro y leva para chegar na distancia que o usuário digitou? 
*estou multiplicando: "quantidade de km que quero chegar/almejo" por "1km" que são os "2 minutos" que é a quantidade de tempo que levo para fazer 1 km, então a fórmula é "distancia percorrida/desejada" * "minutos por cada km", ou melhor "distancia" * "tempo" (mais especificamente minutos por km)
*/