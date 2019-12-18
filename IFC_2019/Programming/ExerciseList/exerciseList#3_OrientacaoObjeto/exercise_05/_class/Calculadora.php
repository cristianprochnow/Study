<?php
    class Calculadora {
        private $firstNumber;
        private $secondNumber;

        public function __construct($firstNumber, $secondNumber) {
            $this -> firstNumber = $firstNumber;
            $this -> secondNumber = $secondNumber;
        }

        public function soma() {
            return $this -> firstNumber + $this -> secondNumber;
        }

        public function subtracao() {
            return $this -> firstNumber - $this -> secondNumber;
        }

        public function multiplicacao() {
            return $this -> firstNumber * $this -> secondNumber;
        }

        public function divisao() {
            return $this -> firstNumber / $this -> secondNumber;
        }
    }
?>