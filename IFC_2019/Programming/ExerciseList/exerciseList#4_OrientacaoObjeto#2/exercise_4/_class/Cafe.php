<?php

    require_once('Bebida.php');

    class Cafe extends Bebida {

        private $cafeina;

        public function __construct($nome, $calorias, $cafeina) {

            parent::__construct($nome, $calorias);

            $this -> cafeina = $cafeina;

        }

        public function __toString() {

            return parent::__toString() . ' | ' . '<b>Cafeína:</b> ' . $this -> cafeina . '%';

        }

    }

?>