<?php
    // Exercício 6
    class Usuario
    {
        public $primeiroNomeUsuario;
        public $sobrenomeUsuario;

        public function dizerOla()
        {
            return "Olá, olá!";
        }
    }

    // Exercício 7
    $usuario1 = new Usuario();

    // Exercício 8
    $usuario1 -> primeiroNomeUsuario = "Alberto";
    $usuario1 -> sobrenomeUsuario = "Felisclérsson";

    // Exercício 9
    echo "<p>";
        echo "O nome completo do usuário é: " . $usuario1 -> primeiroNomeUsuario . " " . $usuario1 -> sobrenomeUsuario;
    echo "</p>";

    // Exercício 10
    echo "<p>";
        echo $usuario1 -> dizerOla() . " " . $usuario1 -> primeiroNomeUsuario . " " . $usuario1 -> sobrenomeUsuario;
    echo "</p>";

    echo "<hr />";

    // Exercício 11
    $usuario2 = new Usuario();

    $usuario2 -> primeiroNomeUsuario = "Jane";
    $usuario2 -> sobrenomeUsuario = "Silva";

    echo "<p>";
        echo $usuario2 -> dizerOla() . " " . $usuario2 -> primeiroNomeUsuario . " " . $usuario2 -> sobrenomeUsuario;
    echo "</p>";
?>