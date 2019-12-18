<?php
    class Animal {
        private $familia;
        private $comida;

        public function __construct($familia, $comida) { 
            $this->familia = $familia; $this->comida = $comida;
        }

        public function setFamilia($familia) {
            $this->familia = $familia;
        }

        public function getFamilia() {
            return $this->familia;
        }

        public function getComida() {
                return $this->comida;
        }
 
        public function setComida($comida) {
                $this->comida = $comida;
        }
    }
?>