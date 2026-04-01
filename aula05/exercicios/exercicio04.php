<?php

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    $usuarios = json_decode(file_get_contents('usuarios.json'), true);

    $encontrou = false;

    foreach ($usuarios as $u) {
        if ($u['email'] == $email) {
            echo "Encontrado:<br>";
            echo "Nome: " . $u['nome'] . "<br>";
            echo "Email: " . $u['email'];
            $encontrou = true;
            break;
        }
    }

    if (!$encontrou) {
        echo "Usuário não encontrado.";
    }
}
?>

<form method="GET">
    <input type="email" name="email" placeholder="Digite o email" required>
    <button type="submit">Buscar</button>
</form>