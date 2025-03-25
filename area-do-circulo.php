<?php

$n = 3.14159;

$raio = fgets(STDIN);

$area = $n * $raio**2;

// sprintf garante que sejam exibidas 4 casas decimais após o ponto
echo sprintf("A=%.4f\n", $area);
