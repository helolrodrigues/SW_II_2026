<?php
   $a = 10;
   $b= 5;
   $soma = $a + $b;
   echo "A soma é : $soma";
   echo "<hr>";

   //ESTRUTURAS CONDICIONAIS 
   //IF
   if ($b > $a) {
    echo "B é maior que A";
   } else {
    echo "B nao é maior que A";
   }
   echo "<hr>";

//exemplo 2

   $n1 = 4;
   $n2 = 5;
   $n3 = 6;

   $media = ($n1 + $n2 + $n3) / 3;

   echo "SUA MÉDIA É: $media : ";
   if ($media > 5) {
    echo "APROVADO!";
   } else {
    if ($media < 4) {
        echo "REPROVADO";
    } else {
        echo "RECUPEREÇÃO";
    }
   }
   echo "<hr>";


   //exemplo 3

   $dia = 10;

    switch ($dia) {
        case 1:
            echo "DOMINGO";
            break;
            case 2:
                echo "SEGUNDA";
                break; 
            case 3:
                echo "TERÇA";
                break;
                    
            case 4:
                echo "QUARTA";
                break;
            case 5:
                echo "QUINTA";
                break;
                case 6:
                    echo "SEXTA";
                    break;
            case 7:
                echo "SABADO";
                break;
        default:
            ECHO "numero invalido";
            break;
    }
    echo "<hr>";

    for ($i=1; $i <=10 ; $i++) { 
        echo "$i - ";
    }

 echo "<hr>";

 $a = 1;
    while ($a <= 10){
        echo "$a - " ;
        $a++;
    }
    echo "<hr>";


    $x = 1;
    do {
        echo "$x - ";
        $x++;

    } while ($x <= 10);
    echo "<hr>";

    $nomes = ['ana', 'ana fortes', 'isa'];
    //echo $nomes; 

   $qtde = count ($nomes);

    echo $nomes [0];
    echo "<br>";
    echo $nomes [1];
    echo "<br>";
    echo $nomes [2];
    echo "<br>";

    //for ($n=0; $n <= $qtde-1 ; $n++) { 
 //      echo $nomes [$n] . "<br>";
   // }

   foreach ($nomes as $nome) {
       echo "$nome <br>";
   }

?>