<?php

// Utilizando While
$cont = 0;
echo "Utilizando While" . PHP_EOL;
while ($cont <= 10) {
    echo "#$cont" . PHP_EOL;
    $cont++;
}

// Utilizando  Do While
$cont = 0;
echo "Utilizando Do While" . PHP_EOL;
do {
    echo "#$cont" . PHP_EOL;
    $cont++;
} while ($cont <= 10);

// Utilizando For
echo "Utilizando For" . PHP_EOL;
for($cont = 0; $cont <=10; $cont++) {
    echo "#$cont" . PHP_EOL;
}

// Utilizando forEach
echo "Utilizando ForEach" . PHP_EOL;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach ($arr as &$valor) {
    echo "#$valor" . PHP_EOL;
}
