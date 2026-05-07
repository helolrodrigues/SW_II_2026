<?php
//CABECALHO
header("Content-Type: application/json"); //Define o tipo de resposta

$metodo = $_SERVER['REQUEST_METHOD'];
//echo "Método da requisição: " . $metodo;

// RECUPERA O ARQUIVO JSON NA MESMA PASTA DO PROJETO
$arquivo = 'usuarios.json';

// VERIFICA SE O ARQUIVO EXISTE, SE NÃO CRIA UM COM ARRAY VAZIO
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT JSON_UNESCAPED_UNICODE));
}

//lE O CONTEUDO DO ARQUIVO EXITE
$usuarios = json_decode(file_get_contents($arquivo), true);

//CONTEÚDO 
//$usuarios = [
 //  ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
  // ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"],
//];


switch ($metodo) {
    case 'GET':
        //echo "AQUI AÇÕES DO MÉTODO GET";
        // Converte para JSON e retorna
        echo json_encode($usuarios, JSON_PRETTY_PRINT JSON_UNESCAPED_UNICODE);
        break;
    case 'POST':
        //echo "AQUI AÇÕES DO MÉTODO POST";
        $dados = json_decode(file_get_contents('php://input'),true);
        //print_r($dados);
        $novoUsuario = [
            "id" => $dados["id"],
            "nome" => $dados["nome"],
            "email" => $dados["email"]
        ];

        // Adiciona o novo usuário ao array existente
        aray_push($usuarios, $novoUsuario);
        echo json_encode('Usuário inserido com sucesso!');
        print_r($usuarios);

        break;
    default:
        echo "MÉTODO NÃO ENCONTRADO!";
        break;

}

//CONTEÚDO 
//$usuarios = [
//   ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
//   ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"],
//];

//Converte para JSON e retorna
//echo json_encode($usuarios);