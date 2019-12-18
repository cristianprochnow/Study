<?php
    class Funcionario {
        public $nome;
        public $departamento;
        public $salario;
        public $dataAdmissao;
        public $CPF;

        public function __construct($nome, $departamento, $salario, $dataAdmissao, $CPF) {
            $this -> nome = $nome;
            $this -> departamento = $departamento;
            $this -> salario = $salario;
            $this -> dataAdmissao = $dataAdmissao;
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

        public function getDataAdmissao() {
            return $this -> dataAdmissao;
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

        // exercise #8
        public function mostra() {
            return 'O funcionário ' . $this -> getNome() . ', com CPF ' . $this -> getCPF() . ' e que trabalha no departamento ' . $this -> getDepartamento() . '. Entrou na empresa em ' . $this -> getDataAdmissao() . ', com um salário de R$ ' . $this -> getSalario() . '. Após seu aumento salarial de 10%, ficou com a remuneração de ' . $this -> recebeAumento() . ', tendo assim um salário anual de ' . $this -> calcGanhoAnual();
        }

        // exercise #8
        public function __toString() {
            return 'O funcionário ' . $this -> getNome() . ', com CPF ' . $this -> getCPF() . ' e que trabalha no departamento ' . $this -> getDepartamento() . '. Entrou na empresa em ' . $this -> getDataAdmissao() . ', com um salário de R$ ' . $this -> getSalario() . '. Após seu aumento salarial de 10%, ficou com a remuneração de R$ ' . $this -> recebeAumento() . ', tendo assim um salário anual de R$ ' . $this -> calcGanhoAnual();
        }
    }
?>