<?php

// representa os km percorridos
$x = intval(fgets(STDIN));
// representa total de combustível gasto
$y = floatval(fgets(STDIN));

$consumo_medio_automovel = $x / $y;

echo number_format($consumo_medio_automovel, 3,'.','') . " km/l" . PHP_EOL;
