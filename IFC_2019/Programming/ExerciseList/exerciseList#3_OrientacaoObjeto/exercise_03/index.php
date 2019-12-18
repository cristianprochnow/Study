<?php
    class Calculo {
        private $numero;

        public function setNumero($numero) {
            $this -> numero = $numero;
        }

        public function calcularFatorial() {
            $numeroFatorial = 1;

            for ($contador = 1; $contador <= $this -> numero; $contador++) {
                $numeroFatorial *= $contador;
            }

            return $numeroFatorial;
        }
    }

    if (isset($_POST['envioNumero'])) {
        $numeroCalculado = new Calculo();
        $numeroCalculado -> setNumero(trim($_POST['numeroInserido']));

        echo "O fatorial do número inserido é igual a " . $numeroCalculado -> calcularFatorial();

        exit;
    }
?>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>3º Exercício</title>
    </head>

    <body>
        <form method="POST" action="index.php">
            <input type="number" name="numeroInserido" placeholder="Insira um número">

            <input type="submit" name="envioNumero">
        </form>
    </body>
</html>