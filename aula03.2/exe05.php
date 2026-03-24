<?php
    //FUNCAO SEM PARAMETROS E RETORNO
    function mostra_array($vetor){
            foreach ($vetor as $valor) {
                echo $valor , "<br>";
            }
            echo "<hr>";
    }

    $numeros = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50,67];
    $nomes = ['Fulano','Beltrano','Ciclano'];

    mostra_array($numeros);
    mostra_array($numeros2);
    mostra_array($nomes);