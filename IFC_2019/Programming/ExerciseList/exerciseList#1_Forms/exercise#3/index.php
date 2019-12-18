<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
        <title>3º Exercício</title>
    </head>

    <body>
        <div id="main-content">
            <div class="main-content-title">
                <h1>Alimentação Ideal</h1>
            </div>

            <div id="form1-box">
                <form action="userMessage.php" method="POST" id="form1">
                    <p id="name" class="external-p">
                        <label for="completeName">Nome Completo:</label>
                        <input type="text" name="name" class="inputObjects" id="completeName" required>
                    </p>

                    <div class="radio-box">
                        <h1>Tipo de Vinho Preferido</h1>

                        <p class="internal-p">
                            <input type="radio" name="wine" value="Branco" class="radioObjects" id="branco" required>
                            <label for="branco">Branco</label>

                            <input type="radio" name="wine" value="Rosé" class="radioObjects" id="rose" required>
                            <label for="rose">Rosé</label>

                            <input type="radio" name="wine" value="Tinto" class="radioObjects" id="tinto" required>
                            <label for="tinto">Tinto</label>
                        </p>
                    </div>

                    <p id="meal" class="external-p">
                        <label for="favoriteMeal">Refeição Preferida:</label>
                        <input type="text" name="meal" class="inputObjects" id="favoriteMeal" required>
                    </p>

                    <div class="submit-button-box">
                        <input type="submit" id="submit-button">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>