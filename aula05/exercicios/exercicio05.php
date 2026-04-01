<?php

$remover = "Mouse Gamer"; 

$produtos = json_decode(file_get_contents('produtos.json'), true);

$novo = [];

foreach ($produtos as $p) {
    if ($p['produto'] != $remover) {
        $novo[] = $p;
    }
}

file_put_contents('produtos.json', json_encode($novo, JSON_PRETTY_PRINT));

echo "Produto removido!";
?>