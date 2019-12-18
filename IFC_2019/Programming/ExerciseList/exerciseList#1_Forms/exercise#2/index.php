<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <title>2º Exercício</title>
    </head>

    <body>
        <div id="main-content">
            <div class="main-content-title">
                <h1>Seletor de Cores Interativo</h1>
            </div>

            <div id="form1-box">
                <form action="colorDemo.php" id="form1" method="GET">
                    <p class="color_box" id="R_box_p">
                        <label for="R_box">R:</label>
                        <input type="number" name="R_color" class="colors-input" id="R_box" required>
                    </p>

                    <p class="color_box">
                        <label for="G_box">G:</label>
                        <input type="number" name="G_color" class="colors-input" id="G_box" required>
                    </p>

                    <p class="color_box" id="B_box_p">
                        <label for="B_box">B:</label>
                        <input type="number" name="B_color" class="colors-input" id="B_box" required>
                    </p>

                    <div id="submit-button-box">
                        <input type="submit" id="submit-button">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>