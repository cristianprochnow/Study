<?php

    require_once('_class/Estudante.php');

    if (isset($_POST['submit'])) {

        if (empty($_POST['nomeAluno']) || empty($_POST['dataNascimento']) || empty($_POST['codAluno']) || empty($_POST['pontosEnem'])) {

            header('Location: index.php');
            print 'Campos de preenchimento obrigatório';

        } elseif ($_POST['pontosEnem'] < 400 || $_POST['pontosEnem'] > 990) {

            header('Location: index.php');
            print 'Nota inválida. Limite de pontuação excedido. A pontuação do Enem tem como mínimo 400 pontos e máximo 990 pontos.';

        } else {

            $nomeAluno = trim($_POST['nomeAluno']);
            $dataNascimento = trim($_POST['dataNascimento']);
            $codAluno = trim($_POST['codAluno']);
            $pontosEnem = (int) trim($_POST['pontosEnem']);

            $aluno = new Estudante($codAluno, $nomeAluno, $dataNascimento, $pontosEnem);

            $quantidadeEstudantes = $aluno -> getNumEstudantes();

        }

    }

?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>6º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="result-box">
                <p> <?php print $aluno; ?> </p>
            </div>

            <div class="number-of-students-box">
                <p> <?php print $quantidadeEstudantes ?> </p>
            </div>

            <div class="link-box">
                <p> <a href="index.php">Voltar</a> </p>
            </div>
        </div>
    </body>
</html>