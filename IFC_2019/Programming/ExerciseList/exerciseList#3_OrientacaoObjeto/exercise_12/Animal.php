<?php
    abstract class Animal {
        private $peso;
        private $idade;
        private $membros;

        public function setPeso($peso) {
            $this -> peso = $peso;

            return $this;
        }

        public function setIdade($idade) {
            $this -> idade = $idade;

            return $this;
        }

        public function setMembros($membros) {
            $this -> membros = $membros;

            return $this;
        }

        abstract public function locomover();
        abstract public function alimentar();
        abstract public function emitirSom();
    }
?>