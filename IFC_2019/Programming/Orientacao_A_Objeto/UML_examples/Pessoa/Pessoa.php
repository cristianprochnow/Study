<?php
    abstract class Pessoa {
        public $priNome;
        public $ultNome;

        public function __construct($priNome, $ultNome) {
            $this -> priNome = $priNome;
            $this -> ultNome = $ultNome;
        }

        abstract public function getSalario();
    }
?>