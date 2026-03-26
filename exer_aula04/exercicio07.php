<?php

function fatorial($num){
    $resultado = 1;

    for($i = $num; $i > 1; $i--){
        $resultado *= $i;
    }

    return $resultado;
}

echo fatorial(4);

?>