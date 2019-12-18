<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
        <title>4º Exercício</title>
    </head>

    <body>
        <?php
            $firstNumber = (float) $_GET['number#1'];
            $secondNumber = (float) $_GET['number#2'];

                if ($_GET['operation'] == "multiplication") {
                    $answer = $firstNumber * $secondNumber;
                } elseif ($_GET['operation'] == "division") {
                    $answer = $firstNumber / $secondNumber;
                } elseif ($_GET['operation'] == "more") {
                    $answer = $firstNumber + $secondNumber;
                } elseif ($_GET['operation'] == "less") {
                    $answer = $firstNumber - $secondNumber;
                }
        ?>

        <div id="secondary-content">
            <div class="secondary-content-title">
                <h1>Resultado</h1>
            </div>

            <div class="operation-answer">
                <p><?php echo $answer ?></p>
            </div>

            <div id="back-button-box">
                <a href="index.php">Realizar outro cálculo</a>
            </div>
        </div>
    </body>
</html>