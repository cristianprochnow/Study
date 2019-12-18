<?php
    class Usuario {
        // Propriedade
        public $primeiroNome;

        // Metodo que diz Olá ao usuário $primeiroNome.
        public function hello()
        {
            echo "Olá, " . $this->primeiroNome;

            // Exercício 4
            return $this;
        }

        // Exercício 2
        public function registrar()
        {
            echo "Sucesso, " . $this->primeiroNome . ". Você foi registrado com sucesso.";

            // Exercício 5
            return $this;
        }

        // Exercício 3
        public function mail()
        {
            echo "Sucesso, " . $this->primeiroNome . ". E-mail enviado.";
        }
    }

    // Exercício 6
    $usuario1 = new Usuario();

    /*
    $usuario1 -> primeiroNome = "Jane";
    echo $usuario1 -> hello();
    echo "<br>";
    echo $usuario1 -> registrar();
    echo "<br>";
    echo $usuario1 -> mail();
    */

    $usuario1 -> primeiroNome = "Jane";
    $usuario1-> hello() -> registrar() -> mail();
?>