<?php

$produtos = [
    [
        "produto" => "Batom",
        "Preco" => 20,
        "Quantidade" => 15
    ],
    [
        "produto" => "Delineador",
        "Preco" => 12,
        "Quantidade" => 8
    ],
    [
        "produto" => "Sombra",
        "Preco" => 15,
        "Quantidade" => 15
    ]
];

$json = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $json);

?>