<?php
    require_once('Mamifero.php');

    class Canguru extends Mamifero {
        public function usarBolsa()
        {
            return 'usando bolsa';
        }

        public function locomover()
        {
            return 'pulando';
        }
    }
?>