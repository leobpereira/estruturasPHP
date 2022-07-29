<?php

$cont = 0;

// Usando o continue para pular iteração
echo "Pulando iteração com o continue:" . PHP_EOL;
for($cont = 0; $cont < 20; $cont++) {
    if($cont % 2 != 0) {
        continue;
    }
    echo "#$cont" . PHP_EOL;
}

echo "Interrompendo iteração com o break:" . PHP_EOL;
for($cont = 0; $cont < 20; $cont++) {
    if($cont == 9) {
        break;
    }
    echo "#$cont" . PHP_EOL;
}