<?php

// continar tentando corrigir erro no beecrowd
// beecrow aponta q tá errado mas as saidas estão corretas
/*
* o erro era pq a entrada estava em uma linha por vez, e ele queria os 3 valores em uma única linha
 */

fscanf(STDIN, "%s %s %s", $a, $b, $c);

$delta = ($b ** 2) - (4 * $a * $c);

// O erro acontece porque, em alguns casos, "a" pode ser igual a 0, o que causa uma divisão por zero. Para evitar isso, adicione uma verificação antes de calcular as raízes: (a equação não pode ser calculada se A for igual a zero )
// realizando está verificação impede a divisão por zero (no caso, divisão por A, que iria possuir o valor 0 e o calculo de raizes inexistentes quando delta for menor que zero)
if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular" . PHP_EOL;
} else {
    $r1 = (-$b + sqrt($delta)) / (2 * $a);
    $r2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "R1 = " . number_format($r1, 5, ".", "") . PHP_EOL;
    echo "R2 = " . number_format($r2, 5, ".", "") . PHP_EOL;
}
