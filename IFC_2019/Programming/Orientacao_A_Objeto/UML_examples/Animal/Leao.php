<?php
    require_once("Animal.php");

    class Leao extends Animal {
        public function __construct($familia, $comida) {
            parent::__construct($familia, $comida);
        }
    }
?>