<?php
    //Conectar–se ao BD
    $dbhost = 'localhost'; //servidor
    $dbuser = 'root'; //usuário administrador
    $dbpassword = ''; // senha de admin
    $dbname = 'tutorial_bd'; // nome do banco

    //Efetua a conexão com o BD
    $link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error
    connecting to MySQL Server.');

    //Obtém os valores do formulário
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    //Cria a Query SQL
    $query = "INSERT INTO feedback (first_name, last_name, email, comments,
    feedback_date) VALUES ('$first_name', '$last_name', '$email', '$comments', NOW()
    )"; // o NOW() serve para pegar a data e hora do sistema
    $result = mysqli_query( $link, $query ) or die('Error querying database.');

    //Fechar a conexão com o BD
    mysqli_close($link);
?>