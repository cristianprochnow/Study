<?php
    class Usuario {
        private $nome;

        public function setNomeUsuario($nome) {
            $this -> nome = $nome;
        }

        public function saudacoesAoUsuario() {
            return "Olá! Eu sou " . $this -> nome;
        }
    }

    if (isset($_POST['envioNome'])) {
        $nomeUsuario = new Usuario();
        $nomeUsuario -> setNomeUsuario(trim($_POST['nomeUsuario']));

        echo "<p>" . $nomeUsuario -> saudacoesAoUsuario() . "</p>";

        exit;
    }
?>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>2º Exercício</title>
    </head>

    <body>
        <form method="POST" action="index.php">
            <input type="text" name="nomeUsuario" placeholder="Quem é você?">

            <input type="submit" name="envioNome">
        </form>
    </body>
</html>