<?php
    require_once('Animal.php');

    class Peixe extends Animal {
        private $corEscama;

        public function setCorEscama($corEscama) {
            $this -> corEscama = $corEscama;

            return $this;
        }

        public function locomover()
        {
            return 'rastejando';
        }

        public function alimentar()
        {
            return 'comendo';
        }

        public function emitirSom()
        {
            return 'emitindo som';
        }

        public function soltarBolha()
        {
            return 'soltando bolha';
        }
    }
?>