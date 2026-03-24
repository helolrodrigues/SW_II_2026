<?php

//TRABALHANDO COM ARRAYS

function mostra_array($vetor){
    foreach ($vetor as $valor) {
        echo $valor ."<br>";
    }

}

$numeros = [1,2,3,4,5];
$nomes = ['Fulano','Beltrano','Ciclano'];


mostra_array($numeros);
mostra_array($nomes);






?>