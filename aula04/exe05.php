<?php

//TRABALHANDO COM ARRAYS

function mostra_array($vetor){
    foreach ($vetor as $valor) {
        echo $valor ."<br>";
    }
}

function mostra_um($vetor2,$pos){
    echo $vetor2[$pos];
}

$numeros = [1,2,3,4,5];
$nomes = ['Fulano','Beltrano','Ciclano'];

mostra_array($numeros);
mostra_array($nomes);

mostra_um($nomes,0);

?>