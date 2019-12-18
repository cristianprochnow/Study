<?php

    /** canais -> 1, 2
     *  resolucão -> 8, 16, 24
     *  amostragem -> 22050, 44100, 88200
     */


     class AudioClip {

        private $canais;
        private $resolucao;
        private $taxaAmostragem;
        private $duracao;


        public function __construct(int $canais, int $resolucao, int $taxaAmostragem) {

            $this -> canais = $canais;
            $this -> resolucao = $resolucao;
            $this -> taxaAmostragem = $taxaAmostragem;

        }


        public function definirQualidadeMinimaPadrao() {

            $this -> canais = 1;
            $this -> resolucao = 8;
            $this -> taxaAmostragem = 22050;

        }


        /** CANAIS */
        public function setCanais($canais) {

            $this -> canais = (int) $canais;

        }


        public function getCanais() {

            return $this -> canais;

        }


        /** RESOLUÇÃO */
        public function setResolucao($resolucao) {

            $this -> resolucao = (int) $resolucao;

        }


        public function getResolucao() {

            return $this -> resolucao;

        }


        /** TAXA DE AMOSTRAGEM */
        public function setTaxaAmostragem($taxaAmostragem) {

            $this -> taxaAmostragem = (int) $taxaAmostragem;

        }


        public function getTaxaAmostragem() {

            return $this -> taxaAmostragem;

        }


        public function ehQualidadeEstudio() {

            if ($this -> getCanais() == 2 && $this -> getResolucao() == 24 && $this -> getTaxaAmostragem() == 88200) {

                return true;

            } else {
                
                return false;

            }

        }


        /** DURAÇÃO DA MÍDIA */
        public function setDuracao($duracao) {

            $this -> duracao = (int) $duracao;

        }


        public function getDuracao() {

            return $this -> duracao;

        }


        public function definirDuracaoMinimaPadrao() {

            $this -> duracao = 60;

            return $this -> duracao;

        }


        public function tamDados() {

            $bytes = ($this -> getDuracao() * $this -> getCanais() * $this -> getTaxaAmostragem() * ($this -> getResolucao() / 8));

            return $bytes;

        }


        public function converterBytesMegabytes() {

            /** Kilobyte */
            $KB = round($this -> tamDados() / 1024, 2);
            /** Megabyte */
            $MB = round($KB / 1024, 2);

            return $MB;

        }

     }

?>