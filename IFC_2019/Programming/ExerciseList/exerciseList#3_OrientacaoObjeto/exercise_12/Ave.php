<?php
    require_once('Animal.php');

    class Reptil extends Animal {
        private $corPena;

        public function setcorPena($corPena) {
            $this -> corPena = $corPena;

            return $this;
        }

        public function locomover()
        {
            return 'voando';
        }

        public function alimentar()
        {
            return 'comendo';
        }

        public function emitirSom()
        {
            return 'cantando';
        }

        public function fazerNinho()
        {
            return 'fazendo ninho';
        }
    }
?>