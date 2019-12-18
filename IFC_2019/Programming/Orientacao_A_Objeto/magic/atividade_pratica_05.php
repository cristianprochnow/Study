<?php
    class Usuario 
    {
        private $primeiroNome;
        private $ultimoNome;

        public function __construct($primeiroNome, $ultimoNome)
        {
            // Exercício 1
            $this -> primeiroNome = $primeiroNome;

            // Exercício 2
            $this -> ultimoNome = $ultimoNome;
        }

        public function getNomeCompleto()
        {
            // Exercício 3
            return "Olá! Bem-vindo, " . $this -> primeiroNome . " " . $this -> ultimoNome;
        }
    }

    // Exercício 4
    $usuario1 = new Usuario("Felizclevilson", "Geraldino");

    // Exercício 5
    echo $usuario1 -> getNomeCompleto();
?>