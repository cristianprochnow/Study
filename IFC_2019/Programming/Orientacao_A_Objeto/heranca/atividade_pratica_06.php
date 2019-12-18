<?php
    // Exercício 1
    class Usuario
    {
        // Exercício 2
        protected $nomeUsuario;
        protected $sobrenomeUsuario;

        // Exercício 9
        /*
        public function __construct($nomeUsuario, $sobrenomeUsuario)
        {
            $this -> sobrenomeUsuario = $sobrenomeUsuario;
            $this -> nomeUsuario = $nomeUsuario;
        }
        */

        public function setName($nomeUsuario)
        {
            $this -> nomeUsuario = $nomeUsuario;
        }

        public function getName()
        {
            return $this -> nomeUsuario;
        }

        /*
        // Exercício 3
        public function setName($nomeUsuario)
        {
            $this -> nomeUsuario = $nomeUsuario;
        }
        */
    }

    // Exercício 4
    class Admin extends Usuario
    {
        // Exercício 5
        public function escrevaNome()
        {
            return "Admin";
        }

        // Exercício 6
        public function digaOla()
        {
            //return "Olá " . $this -> escrevaNome() . ", " . $this -> nomeUsuario . " " . $this -> sobrenomeUsuario;

            return "Olá " . $this -> escrevaNome() . ", " . $this -> getName();
        }
    }

    // Exercício 7
    $admin1 = new Admin();
    $admin1 -> setName("Baltazar");
    echo $admin1 -> digaOla();
?>