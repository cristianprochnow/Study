<?php
    class Data extends Funcionario {
        private $dia;
        private $mes;
        private $ano;

        public function setData($dia, $mes, $ano) {
            $this -> dia = $dia;
            $this -> mes = $mes;
            $this -> ano = $ano;
        }

        public function getData() {
            return $this -> dia . '/' . $this -> mes . '/' . $this -> ano;
        }

        public function mostra() {
            return 'O funcionário ' . $this -> getNome() . ', com CPF ' . $this -> getCPF() . ' e que trabalha no departamento ' . $this -> getDepartamento() . '. Entrou na empresa em ' . $this -> getData() . ', com um salário de R$ ' . $this -> getSalario() . '. Após seu aumento salarial de 10%, ficou com a remuneração de ' . $this -> recebeAumento() . ', tendo assim um salário anual de ' . $this -> calcGanhoAnual();
        }
    }
?>