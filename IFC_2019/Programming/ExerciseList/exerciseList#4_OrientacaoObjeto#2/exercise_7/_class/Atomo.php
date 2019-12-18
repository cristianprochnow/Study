<?php

    class Atomo {

        private $protons;
        private $eletrons;
        private $neutrons;

        public function __construct(int $protons, int $eletrons, int $neutrons) {

            $this -> protons = $protons;
            $this -> eletrons = $eletrons;
            $this -> neutrons = $neutrons;

        }


        public function getProtons() {

            return $this -> protons;

        }


        public function getEletrons() {

            return $this -> eletrons;

        }


        public function getNeutrons() {

            return $this -> neutrons;

        }


        /** verifica se o atomo é um hidrogênio */
        public function verificaHidrogenio() {

            if ($this -> getProtons() == 1 && $this -> getNeutrons() == 0) {

                return true;

            } else {
                
                return false;

            }

        }


        public function ehAtomo() {

            /** se o número de prótons for maior
             *  que 0, então é um átomo, já que não
             *  existe atomo com número de protons
             *  igual a 0
             */
            if ($this -> getProtons() > 0) {

                return true;

            } else {
                
                return false;

            }

        }

        
        public function verificarQuantidadeNeutrons() {

            /** verifica se o numero de neutrons
             *  inseridos é maior que zero, para assim
             *  evitar com que número negativos sejam 
             *  inseridos
             */
            if ($this -> getNeutrons() >= 0) {

                return true;

            } else {
                
                return false;

            }

        }


        // verifica se o atomo é um cation
        public function verificaCationOuAnion() {

            /** se o número de prótons for maior que
             *  o número de elétrons
             */
            if ($this -> getProtons() > $this -> getEletrons()) {

                // é cation
                return 'cátion';

            } else {

                // então é um ânion
                return 'ânion';

            }

        }


        public function ehIon() {

            // se os elétrons forem diferentes dos protons
            if ($this -> Geteletrons() != $this -> getProtons()) {

                // então é íon
                return true;

            } else {
                
                return false;

            }

        }

    }

?>