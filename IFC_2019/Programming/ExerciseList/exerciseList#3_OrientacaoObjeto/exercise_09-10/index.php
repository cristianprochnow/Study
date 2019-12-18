<?php
    require_once('_class/Funcionario.php');
    require_once('_class/Data.php');

    if (isset($_POST['submit'])) {
        $dataFuncionario_1 = new Data();
        $dataFuncionario_1 -> setDados($_POST['nome1'], $_POST['departamento1'], $_POST['salario1'], $_POST['CPF1']);
        $dataFuncionario_1 -> setData($_POST['dia1'], $_POST['mes1'], $_POST['ano1']);

        $dataFuncionario_2 = new Data();
        $dataFuncionario_2 -> setDados($_POST['nome2'], $_POST['departamento2'], $_POST['salario2'], $_POST['CPF2']);
        $dataFuncionario_2 -> setData($_POST['dia2'], $_POST['mes2'], $_POST['ano2']);

        print $dataFuncionario_1 -> mostra();
        print '<br>';
        print '<br>';
        print $dataFuncionario_2 -> mostra();

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
            <p><input type="number" name="salario1" min="0" placeholder="Insira o salário do primeiro funcionário"></p>
            <p><input type="number" name="dia1" min="1" max="31" placeholder="Insira o dia de admissão dele"></p>
            <p><input type="number" name="mes1" min="1" max="12" placeholder="Insira o mês de admissão dele"></p>
            <p><input type="number" name="ano1" min="0" placeholder="Insira o ano de admissão dele"></p>
            <p><input type="text" name="CPF1" placeholder="Insira o CPF dele"></p>
            
            <br>

            <p><input type="text" name="nome2" placeholder="Insira o nome do primeiro funcionário"></p>
            <p><input type="text" name="departamento2" placeholder="Insira o nome do departamento"></p>
            <p><input type="number" name="salario2" min="0" placeholder="Insira o salário do primeiro funcionário"></p>
            <p><input type="number" name="dia2" min="1" max="31" placeholder="Insira o dia de admissão dele"></p>
            <p><input type="number" name="mes2" min="1" max="12" placeholder="Insira o mês de admissão dele"></p>
            <p><input type="number" name="ano2" min="0"laceholder="Insira o ano de admissão dele"></p>
            <p><input type="text" name="CPF2" placeholder="Insira o CPF dele"></p>
            
            <br>

            <p><input type="submit" name="submit"></p>
        </form>
    </body>
</html>