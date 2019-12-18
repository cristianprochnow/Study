<?php
    $host                = 'localhost';
    $user                = 'root';
    $password            = '';
    $name                = 'list1_exercise1';

    $connection = mysqli_connect($host, $user, $password, $name) or die("Error connecting to MySQL Server.");


    // User data
    $user_complete_name = $_POST['user-complete-name'];
    $user_email         = $_POST['user-email'];
    $user_number        = $_POST['user-number'];
    $user_function      = $_POST['user-function'];
    $user_school_name   = $_POST['school-name'];
    $user_crew_name     = $_POST['crew-name'];

    // Crew data
    $crew_name          = $_POST['crew-name'];

    // School data
    $school_name        = $_POST['school-name'];
    $school_state       = $_POST['school-state'];
    $school_city        = $_POST['school-city'];


    // Entering data in the "members" database
    $member_insert      = "INSERT INTO members(nome_membro, email, numero, funcao, escola, nome_equipe) VALUES ('$user_complete_name', '$user_email', '$user_number', '$user_function', '$user_school_name', '$user_crew_name')";

    $member_commit     = mysqli_query($connection, $member_insert) or die("Error member commiting");

    // Entering data in the "crew" database
    $crew_insert      = "INSERT INTO crew(nome_equipe) VALUES ('$crew_name')";

    $crew_commit      = mysqli_query($connection, $crew_insert) or die("Error crew commiting");

    // Entering data in the "school" database
    $school_insert    = "INSERT INTO school (nome, estado, cidade) VALUES ('$school_name', '$school_state', '$school_city')";

    $school_commit    = mysqli_query($connection, $school_insert) or die("Error school commiting");


    mysqli_close($connection);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            1º Exercício
        </title>
    </head>

    <body>
        <div id="answer-content">
            <div id="answer-content-title-box">
                <h1 id="answer-content-title">
                    Sucesso!
                </h1>

                <p class="answer-content-p-box">
                    Operação realizada de forma bem sucedida.
                </p>

                <p class="answer-content-p-box">
                    <a href="index.php">
                        Inserir mais dados
                    </a>

                    <br>
                    <br>

                    <a href="data-view.php">
                        Consultar os dados já inseridos
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>