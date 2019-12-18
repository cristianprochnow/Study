<?php
    require_once('_class/Calculadora.php');

    if (isset($_GET['submitValues'])) {
        $firstNumber = trim($_GET['firstNumber']);
        $secondNumber = trim($_GET['secondNumber']);

        $result = new Calculadora($firstNumber, $secondNumber);
        
        switch ($_GET['operation']) {
            case 'sum':
                print "<p>RESULTADO: " . $result -> soma() . "</p>";
            break;

            case 'subtration':
                print "<p>RESULTADO: " . $result -> subtracao() . "</p>";
            break;

            case 'multiplication':
                print "<p>RESULTADO: " . $result -> multiplicacao() . "</p>";
            break;

            case 'division':
                print "<p>RESULTADO: " . $result -> divisao() . "</p>";
            break;
        }

        exit("<a href='exercise_5.php'>Fazer mais um cálculo.</a>");
    }
?>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>5º Exercício</title>
    </head>

    <body>
        <form method="GET" action="index.php">
            <p><input type="number" name="firstNumber" placeholder="Insira um número..."></p>
            <p><input type="number" name="secondNumber" placeholder="Insira um número..."></p>

            <input type="radio" name="operation" value="sum" id="sum"><label for="sum">Soma</label>
            <br>
            <input type="radio" name="operation" value="subtration" id="subtration"><label for="subtration">Subtração</label>
            <br>
            <input type="radio" name="operation" value="multiplication" id="multiplication"><label for="multiplication">Multiplicação</label>
            <br>
            <input type="radio" name="operation" value="division" id="division"><label for="division">Divisão</label>

            <p><input type="submit" name="submitValues"></p>
        </form>
    </body>
</html>