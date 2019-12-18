<?php
    require_once('Animal.php');

    class Mamifero extends Animal {
        private $corPelo;

        public function setCorPelo($corPelo) {
            $this -> corPelo = $corPelo;

            return $this;
        }

        public function locomover()
        {
            return 'andando';
        }

        public function alimentar()
        {
            return 'comendo';
        }

        public function emitirSom()
        {
            return 'emitindo som';
        }
    }
?>