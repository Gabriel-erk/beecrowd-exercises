<?php

floatval(fscanf(STDIN, "%f %f", $x1, $y1));
floatval(fscanf(STDIN, "%f %f", $x2, $y2));

// método sqrt retorna a raiz quadrada da operação dentro dele 
$distancia = sqrt((($x2 - $x1) ** 2) + (($y2 - $y1) ** 2));    

echo number_format($distancia,4,'.','') . PHP_EOL;