<?php

    class PortaEletrica extends Porta {

        private $potencia;

        public function __construct($potencia, $marca, $largura, $altura) {

            parent::__construct($marca, $largura, $altura);
            $this -> potencia = $potencia;

        }

        public function getPotencia() {

            return $this -> potencia;

        }

        public function __toString() {

            return parent::__toString() . '. E possui uma potência de ' . $this -> getPotencia();

        }

    }

?>