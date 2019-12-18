<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name=”viewport” content="width=device-width" initial-scale="1.0">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <div class="main-content">
            <div id="main-content-title-box">
                <h1 id="main-content-title">
                    Cadastro Automobilístico
                </h1>
            </div>

            <form method="POST" action="process.php" id="main-content-form">
                <p class="p-form">
                    <input type="text" name="manufacturer" class="alone-form-items" id="manufacturer-input" placeholder="Fabricante" required>
                </p>

                <p class="p-form">
                    <input type="text" name="brand" class="form-items" id="brand-input" placeholder="Marca" required>
                </p>

                <p class="p-form">
                    <input type="text" name="model" class="form-items" id="model-input" placeholder="Modelo" required>
                </p>

                <p class="p-form">
                    <input type="number" name="manufacture-year" class="form-items" id="manufacture-year-input" placeholder="Ano de Fabricação" required>
                </p>

                <p class="p-form">
                    <input type="number" name="mileage" class="form-items" id="mileage-input" placeholder="Kilometragem" required>
                </p>

                <div class="submit-buttons-box">
                    <p class="p-form">
                        <input type="reset" class="submit-buttons" id="reset-button">

                        <input type="submit" class="submit-buttons" id="submit-button">
                    </p>
                </div>
            </form>
        </div>
    </body>
</html>