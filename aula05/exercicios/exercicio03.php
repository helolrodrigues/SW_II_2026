<?php

$arquivo = 'produtos.json';

$json = file_get_contents($arquivo);
$produtos = json_decode($json, true);

$novoproduto = [
    "nome" => "Blush",
    "preco" => 17,
    "estoque" => 20
];

$produtos[] = $novoproduto;

$jsonAtualizado = json_encode($produtos, JSON_PRETTY_PRINT);

file_put_contents($arquivo, $jsonAtualizado);

echo "Produto adicionado com sucesso!";
?>