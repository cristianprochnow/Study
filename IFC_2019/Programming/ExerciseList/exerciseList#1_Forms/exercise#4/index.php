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
        <div id="main-content">
            <div class="main-content-title">
                <h1>CALCULADORA</h1>
            </div>

            <div class="form1-box">
                <form action="calc.php" method="GET" id="form1">
                    <p class="input-numbers-p">
                        <label for="number#1">1º Número:</label>
                        <input type="number" name="number#1" id="number#1" class="input-numbers" placeholder="1º número..." required>
                    </p>

                    <p class="input-numbers-p">
                        <label for="number#2">2º Número:</label>
                        <input type="number" name="number#2" id="number#2" class="input-numbers" placeholder="2º número..." required>
                    </p>

                    <ul id="operations-list">
                        <div class="left">
                            <li class="operations-input-li">
                                <input type="radio" name="operation" value="multiplication" class="operations-input" id="multiplication-input" required>
                                <label for="multiplication-input">x</label>
                            </li>

                            <li class="operations-input-li" id="division-input-li">
                                <input type="radio" name="operation" value="division" class="operations-input" id="division-input" required>
                                <label for="division-input">÷</label>
                            </li>
                        </div>

                        <div class="right">
                            <li class="operations-input-li">
                                <input type="radio" name="operation" value="more" class="operations-input" id="more-input" required>
                                <label for="more-input">+</label>
                            </li>

                            <li class="operations-input-li" id="less-input-li">
                                <input type="radio" name="operation" value="less" class="operations-input" id="less-input" required>
                                <label for="less-input">-</label>
                            </li>
                        </div>
                    </ul>

                    <div id="submit-button-box">
                        <button type="submit" id="submit-button">=</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>