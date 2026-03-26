<?php

function gera_numeros(){
    $numeros = [];

    for($i = 0; $i < 10; $i++){
        $numeros[] = rand(1, 10);
    }

    return $numeros;
}

$resultado = gera_numeros();

for($i = 0; $i < 10; $i++){
    echo $resultado[$i] . "<br>";
}

?>