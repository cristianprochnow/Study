<?php
    require_once("Pessoa.php");
    
    class Empreiteiro extends Pessoa{
        private $valHora;
        private $numHoras;

        public function __construct($priNome, $ultNome, $valHora, $numHoras){
            parent::__construct($priNome, $ultNome);

            $this -> valHora = $valHora;
            $this -> numHoras = $numHoras;
        }

        public function getSalario(){
            return $this -> valHora * $this -> numHoras;
        }

        public function printInfo(){
            return "Nome: " . $this -> priNome . "<br> Salario: " . $this -> getSalario();
        }
    }
?>