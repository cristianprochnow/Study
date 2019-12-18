<?php
    // general data connecting
    $host   = 'localhost';
    $user   = 'root';
    $passwd = '';
    $dbName = 'tutorial_bd';

    // data extracting from HTML form
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $comment    = $_POST['comments'];

    try {
        // connecting to PDO
        $connection = new PDO("mysql:host=$host;dbname=$dbName", $user, $passwd);

        // data inserting
        $query = "INSERT INTO feedback (first_name, last_name, email, comments, feedback_date) VALUES ('$first_name', '$last_name', '$email', '$comment', NOW())";

        // PDO connecting
        $connection -> exec($query);

        echo "Registro inserido com sucesso!";

        // closing connect
        $connection = NULL;
    } catch(PDOException $e) {
        echo "Conexão falhou: " . $e -> getMessage();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exemplo PDO</title>
    </head>

    <body>
        <p>
            <a href="feedback.php">
                Inserir dados
            </a>
        </p>

        <p>
            <a href="view_feedback.php">
                Visualizar dados
            </a>
        </p>
    </body>
</html>