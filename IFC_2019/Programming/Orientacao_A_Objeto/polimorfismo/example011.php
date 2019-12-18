<?php
    /** */
    interface Forma {
        public function calcArea();
    }

    class Circulo implements Forma {
        private $raio;

        public function __construct($raio){
            $this->raio = $raio;
        }

        // calcula a área do circulo
        public function calcArea() {
            return $this->raio * $this->raio * pi();
        }
    }

    class Retangulo implements Forma {
        private $base;
        private $altura;

        public function __construct($base, $altura) {
            $this->base = $base;
            $this->altura = $altura;
        }
        // calcula a area do retangulo
        public function calcArea() {
            return $this->base * $this->altura;
        }
    }

    $circ = new Circulo(3);
    $retg = new Retangulo(3,4);

    echo $circ->calcArea();
    echo $retg->calcArea();
?>