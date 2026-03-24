<?php
//FUNÇÃO COM PARAMETROS E COM RETORNO

 function resto ($x){
    $resto = $x % 2;
    return $resto;
 }

 $num1 = 8;
 $num2 =7;
  $resultado = resto($num1);

  if($resultado == 0){
   echo "PAR";
   }else{
      echo "ÍMPAR";
   }
?>
