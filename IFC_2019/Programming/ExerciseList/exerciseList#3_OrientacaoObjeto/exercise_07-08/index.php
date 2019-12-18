<?php
    require_once('_class/Funcionario.php');

    if (isset($_POST['submit'])) {
        $funcionario_1 = new Funcionario($_POST['nome1'], $_POST['departamento1'], $_POST['salario1'], $_POST['data1'], $_POST['CPF1']);
        $funcionario_2 = new Funcionario($_POST['nome2'], $_POST['departamento2'], $_POST['salario2'], $_POST['data2'], $_POST['CPF2']);

        //print $funcionario_1 -> mostra();
        print $funcionario_1;

        print '<br><br>';

        //print $funcionario_2 -> mostra();
        print $funcionario_2;

        print "<p><a href='index.php'>Fazer mais uma consulta</a></p>";

        exit;
    }
?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>7º Exercício</title>

        <style>
            p {
                text-align: center;
            }

            input {
                width: 400px;
                height: 30px;
                text-indent: 5px;
            }
        </style>
    </head>

    <body>
        <form method="POST" action="index.php">
            <p><input type="text" name="nome1" placeholder="Insira o nome do primeiro funcionário"></p>
            <p><input type="text" name="departamento1" placeholder="Insira o nome do departamento"></p>
            <p><input type="number" name="salario1" placeholder="Insira o salário do primeiro funcionário"></p>
            <p><input type="text" name="data1" placeholder="Insira data de admissão dele"></p>
            <p><input type="text" name="CPF1" placeholder="Insira o CPF dele"></p>
            
            <br>

            <p><input type="text" name="nome2" placeholder="Insira o nome do segundo funcionário"></p>
            <p><input type="text" name="departamento2" placeholder="Insira o departamento dele"></p>
            <p><input type="number" name="salario2" placeholder="Insira o salário dele"></p>
            <p><input type="text" name="data2" placeholder="Insira a data de admissão dele"></p>
            <p><input type="text" name="CPF2" placeholder="Insira o CPF do segundo funcionário"></p>
            
            <br>

            <p><input type="submit" name="submit"></p>
        </form>
    </body>
</html>