<?php
function tabuada($numero) {
    $resultado = [];

    for ($i = 1; $i <= 10; $i++) {
        $resultado[] = "$numero x $i = " . ($numero * $i);
    }

    return $resultado;
}


$tabuada = tabuada(5);

foreach ($tabuada as $linha) {
    echo $linha . "<br>";
}
?>

mesma coisa da cinco