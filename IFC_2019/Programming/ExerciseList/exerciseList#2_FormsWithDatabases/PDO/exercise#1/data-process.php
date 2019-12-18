<?php
    try
    {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPasswd = '';
        $dbName = 'list1_exercise1';

        $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

        // members
        $email               = $_POST['email'];
        $nome_membro         = $_POST['nome_membro'];
        $escola              = $_POST['escola'];
        $numero              = $_POST['numero'];
        $funcao              = $_POST['funcao'];
        $nome_equipe_members = $_POST['nome_equipe'];

        $insert_text_members = "INSERT INTO members(email, nome_membro, escola, numero, funcao, nome_equipe) VALUES ('$email', '$nome_membro', '$escola', '$numero', '$funcao', '$nome_equipe_members')";

        $connection->exec($insert_text_members);

        // crew
        $nome_equipe = $_POST['nome_equipe'];

        $insert_text_crew = "INSERT INTO crew(nome_equipe) VALUES ('$nome_equipe')";

        $connection->exec($insert_text_crew);

        // school
        $nome   = $_POST['escola'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $insert_text_school = "INSERT INTO school(nome, cidade, estado) VALUES ('$nome', '$cidade', '$estado')";

        $connection->exec($insert_text_school);

        print "Registro realizado com êxito!";

        $connection = NULL;
    }
    catch (PDOException $error)
    {
        print "Conexão Falhou! Erro: " . $error->getMessage();
    }
?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title> 1º Exercício </title>
    </head>

    <body>
        <p> <a href="index.php"> Inserir dados </a> </p>
        <p> <a href="data-view.php"> Visualizar dados </a> </p>
    </body>
</html>