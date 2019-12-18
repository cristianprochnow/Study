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
        <div id="secondary-content">
            <div class="secondary-content-title">
                <h1>Obrigado pela sua seleção, <span> <?php echo $_POST['name'] ?> </span></h1>
            </div>

            <p class="external-p">Pelo que foi constatado, você realmente aprecia <?php echo $_POST['meal'] ?>. Especialmente se tiver Vinho <?php echo $_POST['wine'] ?> como bebida.</p>

            <p id="exit-link-p"><a href="index.php" id="exit-link">Voltar</a></p>
        </div>
    </body>
</html>