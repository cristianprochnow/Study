<?php
    class Usuario
    {
        // Exercício 2
        private $primeiroNome;

        // Exercício 3
        public function setNome($primeiroNome)
        {
            $this -> primeiroNome = $primeiroNome;
        }

        // Exercício 4
        public function getNome()
        {
            return "Bem-vindo, " . $this -> primeiroNome;
        }
    }

    // Exercício 5
    $usuario1 = new Usuario();

    $usuario1 -> setNome("Joe");

    echo $usuario1 -> getNome();
?>