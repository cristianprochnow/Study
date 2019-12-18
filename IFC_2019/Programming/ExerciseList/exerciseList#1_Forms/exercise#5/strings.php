<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <title>5º Exercício</title>
    </head>

    <body>
        <?php
            $text = $_POST['userText'];

            $textSize = strlen($text);

                if ($_POST['convertionType'] == "invert") {
                    $convertedText = strrev($text);
                } elseif ($_POST['convertionType'] == "bigLetters-all") {
                    $convertedText = strtoupper($text);
                } elseif ($_POST['convertionType'] == "littleLetters-all") {
                    $convertedText = strtolower($text);
                } elseif ($_POST['convertionType'] == "bigLetters") {
                    $convertedText = ucwords($text);
                } else {
                    $convertedText = $text;
                }
        ?>    
    
        <div id="secondary-content">
            <div id="secondary-content-title">
                <h1>Texto Convertido</h1>
            </div>

            <div class="text-box">
                <p class="text-box-p" id="total-p"> <?php echo $convertedText ?> </p>
            </div>
            
            <div class="comment-box">
                <p class="text-box-p" id="comment-p"><?php echo $textSize ?> CARACTERES</p>
            </div>
        </div>
    </body>
</html>