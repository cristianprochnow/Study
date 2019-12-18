<?php

    class App {

        private $nomeUsuario;
        private $numero;
        static $numeroDownloads;

        public function __construct($nomeUsuario, $numero) {

            $this -> nomeUsuario = $nomeUsuario;
            $this -> numero = $numero;

            App::$numeroDownloads++;

        }

        public function getNumeroDownloads() {

            return App::$numeroDownloads;

        }

        public function __toString() {

            return '<b>Usuário:</b> ' . $this -> nomeUsuario . ' | ' . '<b>ID:</b> ' . $this -> numero;
        }

    }

?>