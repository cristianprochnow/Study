<?php
    try
    {
    $dbHost   = 'localhost';
    $dbUser   = 'root';
    $dbPasswd = '';
    $dbName   = 'list1_exercise3';

    $fabricante     = $_POST['fabricante'];
    $marca          = $_POST['marca'];
    $modelo         = $_POST['modelo'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $quilometragem  = $_POST['quilometragem'];

    $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

    $query = "INSERT INTO autos(fabricante, marca, modelo, ano_fabricacao, quilometragem) VALUES ('$fabricante', '$marca', '$modelo', '$ano_fabricacao', '$quilometragem')";

    $connection->exec($query);

    print "Operação Realizada com Êxito!";

    $connection = NULL;
    }
    catch (PDOException $error)
    {
        print "Conexão Falhou! Erro : " . $error->getMessage();
    }
?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <p>
            <a href="index.php">
                Inserir mais Dados
            </a>
        </p>

        <p>
            <a href="data-view.php">
                Visualizar os Dados
            </a>
        </p>
    </body>
</html>