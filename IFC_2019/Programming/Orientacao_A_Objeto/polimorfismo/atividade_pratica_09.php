<?php
    abstract class Usuario {
        protected $pontos = 0;
        protected $numeroDeArtigos = 0;
        // Metodos abstrato e concretos

        public function setNumeroDeArtigos($nart) {
            $this -> numeroDeArtigos = (int)$nart;
        }

        public function getNumeroDeArtigos() {
            return $this -> numeroDeArtigos;
        }

        abstract public function calcPontuacao();
    }

    class Autor extends Usuario {
        public function calcPontuacao() {
            return ($this -> numeroDeArtigos * 10) + 20;
        }
    }

    class Editor extends Usuario {
        public function calcPontuacao() {
            return ($this -> numeroDeArtigos * 6) + 15;
        }
    }

    $autor1 = new Autor();
    $autor1 -> setNumeroDeArtigos(8);
    echo $autor1 -> calcPontuacao();

    $editor1 = new Editor();
    $autor1 -> setNumeroDeArtigos(15);
    echo $autor1 -> calcPontuacao();
?>