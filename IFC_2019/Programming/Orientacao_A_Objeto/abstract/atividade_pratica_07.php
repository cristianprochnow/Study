<?php
    // exercise #1
    abstract class Usuario
    {
        // exercise #2
        protected $nomeUsuario;

        // exercise #2
        public function setNome($nomeUsuario)
        {
            $this -> nomeUsuario = $nomeUsuario;
        }

        // exercise #2
        public function getNome()
        {
            return $this -> nomeUsuario;
        }

        // exercise #1
        abstract public function declararSeuPapel();
    }

    // exercise #3
    class Admin extends Usuario
    {
        // exercise #4
        public function declararSeuPapel()
        {
            // exercise #5
            return "Olá, " . $this -> nomeUsuario . ". Você é o Admin.";
        }
    }

    // exercise #6
    class Viewer extends Usuario
    {
        // exercise #6
        public function declararSeuPapel()
        {
            
        }
    }

    // exercise #7
    $admin1 = new Admin();
    $admin1 -> setNome("Mefistófeles");
    echo $admin1 -> declararSeuPapel();
?>