<?php
    require_once("Animal.php");

    class Vaca extends Animal {
        private $dono;

        public function __construct($familia, $comida) {
            // o parent chama o processo da classe mãe, não precisando incluir novamente
            parent::__construct($familia, $comida);
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getDono() {
            return $this->dono;
        }
    }
?>