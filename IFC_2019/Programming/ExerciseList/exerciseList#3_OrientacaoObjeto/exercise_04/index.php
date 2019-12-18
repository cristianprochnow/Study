<?php
    class Numeros {
        private $numero1;
        private $numero2;
        private $numero3;
        private $numero4;
        private $numero5;
        private $numero6;
        private $numero7;

        public function __construct(array $numeros) {
            $this -> numero1 = $numeros[0];
            $this -> numero2 = $numeros[1];
            $this -> numero3 = $numeros[2];
            $this -> numero4 = $numeros[3];
            $this -> numero5 = $numeros[4];
            $this -> numero6 = $numeros[5];
            $this -> numero7 = $numeros[6];
        }

        // função que forma a array com todos os número inseridos
        public function formarArray() {
            $array = [
                $this -> numero1,
                $this -> numero2,
                $this -> numero3,
                $this -> numero4,
                $this -> numero5,
                $this -> numero6,
                $this -> numero7
            ];

            sort($array);

            return $array;
        }
    }

    if (isset($_POST['envioNumero'])) {
        // coloca os dados que o usuário inseriu dentro de uma arrqy
        // logo em seguida manda direto para a classe
        $numeros = new Numeros([
            trim($_POST['numero1']),
            trim($_POST['numero2']),
            trim($_POST['numero3']),
            trim($_POST['numero4']),
            trim($_POST['numero5']),
            trim($_POST['numero6']),
            trim($_POST['numero7'])
        ]);

        $array = $numeros -> formarArray();
        foreach ($array as $row) {
            print $row;
            print "<br>";   
        }

        exit;
    }
?>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>4º Exercício</title>
    </head>

    <body>
        <form method="POST" action="index.php">
            <table>
                    <tr><input type="number" name="numero1" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero2" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero3" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero4" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero5" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero6" placeholder="Insira um número"></tr>
                    <tr><input type="number" name="numero7" placeholder="Insira um número"></tr>

                    <tr><input type="submit" name="envioNumero"></tr>
            </table>
        </form>
    </body>
</html>