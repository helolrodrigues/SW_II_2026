<?php

//string json (array contendo 3 elementos)
$json_str = '
{
    "empregados": [
        {"Nome":"Jason Jones", "Idade":38, "Sexo":"M"},
        {"Nome":"Ada Pascalina", "Idade":35, "Sexo":"F"},
        {"Nome":"Delphino Da Silva", "Idade":26, "Sexo":"M"}
    ]
}
';

//faz o parsing da string criando o array "empregados"
$jsonObj = json_decode($json_str);
echo "<pre>";
var_dump($jsonObj);
echo "</pre>";



echo "<hr>";
$empregados = $jsonObj->empregados;
echo "<pre>";
var_dump($empregados);
echo "</pre>";


echo "<hr>";
//navega pelos elementos do array, imprimindo cada empregado
foreach ($empregados as $e ) {
    echo "Nome: $e->Nome - Idade: $e->Idade - Sexo: $e->Sexo<br>";
}






?>