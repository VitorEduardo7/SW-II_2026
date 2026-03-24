<?php
function somaArray($numeros) {
    $soma = 0;

    foreach ($numeros as $num) {
        $soma += $num;
    }

    return $soma;
}


$array = [1, 2, 3, 4, 5];
echo "Soma: " . somaArray($array);
?>