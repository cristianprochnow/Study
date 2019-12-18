<?php
    class Funcionario {
        public $nome;
        public $departamento;
        public $salario;
        public $CPF;

        public function setDados($nome, $departamento, $salario, $CPF) {
            $this -> nome = $nome;
            $this -> departamento = $departamento;
            $this -> salario = $salario;
            $this -> CPF = $CPF;
        }

        public function getNome() {
            return $this -> nome;
        }

        public function getDepartamento() {
            return $this -> departamento;
        }

        public function getSalario() {
            return $this -> salario;
        }

        public function getCPF () {
            return $this -> CPF;
        }

        public function recebeAumento() {
            $salarioComAcrescimo = (($this -> salario * 0.1) + $this -> salario);

            return $salarioComAcrescimo;
        }

        public function calcGanhoAnual() {
            $salarioComAcrescimoAnual = $this -> recebeAumento() * 12;

            return $salarioComAcrescimoAnual;
        }
    }
?>