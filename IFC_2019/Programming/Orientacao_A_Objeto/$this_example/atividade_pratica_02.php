<?php
    /*
    class Usuario
    {
        // as propriedades
        public $primeiroNome;
        public $ultimoNome;
        
        // metodo que diz Ola ao usuario
        public function hello()
        {
            return "Olá";
        }
    }
    */
    
    // Exercício 2
    class Usuario
    {
        // as propriedades
        public $primeiroNome;
        public $ultimoNome;
        
        // metodo que diz Ola ao usuario
        public function hello()
        {
            return "Olá " . $this -> primeiroNome . " " . $this -> ultimoNome;
        }
    }

    // Exercício 3
    $user1 = new Usuario();

    $user1 -> primeiroNome = "Jonnie";
    $user1 -> ultimoNome = "Bravo";

    // Exercício 4
    echo $user1 -> hello();
    /* Resultado:
        Olá Jonnie Bravo
    */
?>