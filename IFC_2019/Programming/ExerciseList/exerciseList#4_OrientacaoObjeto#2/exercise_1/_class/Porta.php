<?php

    class Porta {

        private $marca;
        private $largura;
        private $altura;
        static $totalPortas;

        public function __construct($marca, $largura, $altura) {

            $this -> marca = $marca;
            $this -> largura = $largura;
            $this -> altura = $altura;

            Porta::$totalPortas++;

        }

        public function calcularAreaPorta() {

            $area = $this -> largura * $this -> altura;

            return $area;

        }

        public function getMarcaPorta() {

            return $this -> marca;

        }

        public function getTotalPortas() {

            return Porta::$totalPortas;

        }

        public function __toString() {

            return 'A porta de marca ' . $this -> marca . ', tem como área ' . $this -> calcularAreaPorta();

        }

    }

?>