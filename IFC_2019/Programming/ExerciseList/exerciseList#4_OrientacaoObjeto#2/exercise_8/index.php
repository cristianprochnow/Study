<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>8º Exercício</title>
    </head>
    
    <body>
        <div class="main-content">
            <div class="answer-box">
                <?php
                
                    require_once('_class/Numero.php');

                    if (isset($_POST['submit'])) {

                        ?>
                            <fieldset class="number-box">
                        <?php

                        if (empty($_POST['number'])) {

                            print '<p>Insira um número.</p>';

                        } elseif ($_POST['number'] < 0) {

                            print '<p>Número inválido.</p>';

                        } else {
                            
                            $numeroTeste = trim($_POST['number']);

                            $numero = new Numero();
                            $numero -> setNumero($numeroTeste);

                            
                            if ($numero -> ehPrimo()) {

                                print '<p>O número inserido é primo.</p>';

                            } else {
                                
                                print '<p>O número inserido não é primo.</p>';

                            }

                        }

                        ?>
                            </fieldset>
                        <?php

                    }

                ?>
            </div>

            <div class="form-box">
                <form method="POST" action="index.php">
                    <fieldset class="number-box">
                        <legend> <b>Verificador de Número Primo</b> </legend>

                        <p> <input type="number" name="number" placeholder="Insira um número" /> </p>

                        <p>
                            <input type="reset" name="reset" value="Redefinir" />
                            <input type="submit" name="submit" value="Enviar" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>