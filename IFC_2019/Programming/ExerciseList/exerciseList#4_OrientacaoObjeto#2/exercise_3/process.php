<?php

    require_once('_class/App.php');

    if (isset($_POST['submit'])) {

        $nomeApp = trim($_POST['nomeApp']);
        $idApp = trim($_POST['idApp']);

        $app = new App($nomeApp, $idApp);

    }

?>

<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>3º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="form-box">
                <p> <?php print $app; ?> </p>
                <br>
                <p>Número de Downloads: <?php print $app -> getNumeroDownloads(); ?> </p>

                <button> <a href="index.php">Voltar</a> </button>
            </div>
        </div>
    </body>
</html>
