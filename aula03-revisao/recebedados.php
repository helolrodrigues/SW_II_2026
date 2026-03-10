<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>

<?php
   // $nome = $_POST['nome'];
   $nome = htmlspecialchars ($POST ['nome']); //evita virus
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $ano_atual = date ('Y'); //mostra o ano, mes, dia, hora
    echo $ano_atual;


     $ano = 2026;
     ?>

<p>O nome é: <?php echo $nome; ?> </p>
<p>O email é: <?php echo $email; ?> </p>
<p>A idade é: <?php echo $idade; ?> </p>


<p>Ahhh entao você nasceu no ano de:<?php echo $ano - $idade; ?> </p>

<?php
if ($idade >= 18) {
    echo '<p style= "color: green"> Você é maior de idade </p>';
} else {
    echo '<p style = "color : red"> Você é menor de idade </p>';
}
?>


    
</body>
</html>