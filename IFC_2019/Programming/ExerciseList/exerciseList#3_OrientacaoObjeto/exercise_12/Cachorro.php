<?php
    require_once('Mamifero.php');

    class Cachorro extends Mamifero {
        public function enterrarOsso()
        {
            return 'enterrando osso';
        }

        public function abanarRabo()
        {
            return 'abanando o rabo';
        }
    }
?>