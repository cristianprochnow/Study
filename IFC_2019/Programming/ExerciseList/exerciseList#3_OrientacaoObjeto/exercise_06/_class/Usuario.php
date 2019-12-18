<?php
    class Aniversario {
        private $nome;
        private $idade;
        private $anoAtual;

        public function __construct($nome, $idade, $anoAtual) {
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> anoAtual = $anoAtual;
        }

        public function calculaAniversario() {
            $contadorComAnosAdicionais = $this -> anoAtual + 5;

            for ($contador = $this -> anoAtual; $contador <= $contadorComAnosAdicionais; $contador++) {
                $idadeComAcrescimo = $this -> idade++;

                print 'Sua idade em ' . $contador . ' será ' . $idadeComAcrescimo . ' anos. <br>';
            }
        }
    }
?>