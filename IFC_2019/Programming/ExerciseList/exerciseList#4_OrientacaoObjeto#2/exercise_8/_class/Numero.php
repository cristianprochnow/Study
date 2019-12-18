<?php

    class Numero {

        private $numero;


        public function setNumero($numero) {

            $this -> numero = $numero;

        }


        public function getNumero() {

            return $this -> numero;

        }


        public function ehPrimo() {

            /*
            if ($this -> getNumero() != 1 && $this -> getNumero() > 0 && $this -> getNumero() % 2 != 0 && $this -> getNumero() % 3 != 0 && $this -> getNumero() % 5 != 0 && $this -> getNumero() % 6 != 0 && $this -> getNumero() % 7 != 0 || $this -> getNumero() == 2) {

                return true;

            } else {
                
                return false;

            }*/

            $numero = $this -> getNumero();

            
            if ($numero != 1 && substr($numero, -1) != 0 && substr($numero, -1) != 2 && substr($numero, -1) != 4 && substr($numero, -1) != 6 && substr($numero, -1) != 8 && substr($numero, -1) != 5 && $numero % 6 != 0 && $numero % 9 != 0 || $numero == 2) {

                return true;

            } else {
                
                return false;

            }

        }

    }

?>