<?php

    class ContaTelefone {

        private $nomeUsuario;
        private $numero;
        static $numeroTotalContas;

        public function __construct($nomeUsuario, $numero) {

            $this -> nomeUsuario = $nomeUsuario;
            $this -> numero = $numero;

            ContaTelefone::$numeroTotalContas++;

        }

        public function getNumeroTotalContas() {

            return '<b>Número total de contas cadastradas:</b> ' .  ContaTelefone::$numeroTotalContas;

        }

        public function __toString() {

            return '<b>Usuário:</b> ' . $this -> nomeUsuario . ' <b>|</b> ' . '<b>Número:</b> ' . $this -> numero;
            
        }

    }

?>