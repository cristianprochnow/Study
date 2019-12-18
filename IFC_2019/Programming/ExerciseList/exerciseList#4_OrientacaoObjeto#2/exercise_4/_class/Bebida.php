<?php

    class Bebida {

        private $nome;
        private $calorias;
        static $totalBebidas;

        public function __construct($nome, $calorias) {

            $this -> nome = $nome;
            $this -> calorias = $calorias;

            Bebida::$totalBebidas++;

        }

        public function getCalorias() {

            return $this -> calorias;

        }

        public function getBeverages() {

            return Bebida::$totalBebidas;

        }

        public function __toString() {

            return '<b>Bebida:</b> ' . $this -> nome . ' | ' . '<b>Calorias:</b> ' . $this -> getCalorias() . 'Kcal';

        }

    }

?>