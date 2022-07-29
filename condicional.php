<?php

$idade = 22;
$acompanhantes = 1;

echo "---------- ATENÇÃO ----------\n";
echo "Você só pode entrar se tiver mais de 18 anos!";
echo "\nSe você tiver menos de 18 anos, a entrada é permitida apenas com um acompanhante!\n\n";

if($idade >= 18) {
    echo "Você tem " . $idade . " anos. Entrada liberada!";
}

else if($idade < 18 && $acompanhantes > 0) {
    echo "Você tem " . $idade . " anos mas está acompanhado. Entrada liberada!";
}

else {
    echo "Você tem " . $idade . " anos e não está acompanhado. Entrada proibida!";
}

?>