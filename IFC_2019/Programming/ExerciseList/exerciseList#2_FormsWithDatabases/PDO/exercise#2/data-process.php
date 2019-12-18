<?php
    $nome  = $_POST['nome'];
    $idade = $_POST['idade'];

    $dbHost   = 'localhost';
    $dbUser   = 'root';
    $dbPasswd = '';
    $dbName   = 'list1_exercise2';

    try 
    {
        $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

        $query = "INSERT INTO teste1(nome, idade) VALUES ('$nome', $idade)";

        $connection -> exec($query);

        $connection = NULL;
    } 
    catch (PDOException $e) 
    {
        print "Conexão falhou! " . $e -> getMessage();
    }
?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>
            2º Exercício
        </title>
    </head>

    <body>
        <div id="secondary-content">
            <div id="secondary-content-title-box">
                <h1 id="secondary-content-title">
                    Sucesso!
                </h1>
            </div>

            <div id="link-box">
                <p>
                    <a href="index.php">
                        Inserir Dados
                    </a>
                </p>

                <p>    
                    <a href="data-view.php">
                        Visualizar Dados
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>