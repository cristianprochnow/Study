<?php
    require_once('_class/Usuario.php');

    if (isset($_POST['submitValues'])) {
        $usuarioAleatorio = new Aniversario($_POST['nomeUsuario'], $_POST['idadeUsuario'], $_POST['anoAtual']);

        $usuarioAleatorio -> calculaAniversario();

        print "<a href='index.php'>Fazer outra previsão</a>";

        exit;
    }
?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>6º Exercício</title>
    </head>

    <body>
        <form method="POST" action="index.php">
            <input type="text" name="nomeUsuario" placeholder="Insira seu nome...">
            <input type="number" name="idadeUsuario" placeholder="Insira sua idade...">
            <input type="number" name="anoAtual" placeholder="Insira o ano atual...">

            <input type="submit" name="submitValues">
        </form>
    </body>
</html>
