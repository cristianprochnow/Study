<?php
    $dbHost     = 'localhost';
    $dbUser     = 'root';
    $dbPassword = '';
    $dbName     = 'list1_exercise2';
    
    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    $userName   = $_POST['username'];
    $age        = $_POST['age'];

    $insert     = "INSERT INTO teste1 (nome, idade) VALUES ('$userName', '$age')";

    $commit     = mysqli_query($connection, $insert);

    mysqli_close($connection);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>2º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="main-content-title">
                <h1>Obrigado pela preferência, <?php print $userName ?></h1>
            </div>

            <div class="link-buttons">
                <a href="index.php">Inserir mais dados</a>
                <a href="dataView.php">Visualizar todos os dados inseridos</a>
            </div>
        </div>
    </body>
</html>