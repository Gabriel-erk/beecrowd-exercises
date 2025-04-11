<?php

fscanf(STDIN, "%d %d", $valor1, $valor2);

/* 
* se o resto da divisão de A por B ou de B por A for 0 (se um OU outro for verdade, já significa que os números são múltiplos de si, se não, o resto de A por B ou de B por A não for 0, significa que eles não são múltiplos um do outro)
*/
if ($valor1 % $valor2 == 0 || $valor2 % $valor1 == 0) {
    echo "Sao Multiplos" . PHP_EOL;
} else {
    echo "Nao sao Multiplos" . PHP_EOL;
}
