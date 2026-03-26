<?php
 function tabuada($x){
    for($i=0; $i <= 10; $i++){
        $resultado = $x * $i;
        echo "$x * $i = $resultado <br>";
    }
    }

 tabuada(5);
?>