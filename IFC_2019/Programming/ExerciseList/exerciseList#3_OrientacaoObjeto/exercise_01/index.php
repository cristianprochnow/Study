<?php
    class MinhaClasse {
        public function informaClasse() {
            return "Você está usando " . __CLASS__ . " como classe.";
        }
    }

    $informacaoClasse = new MinhaClasse();
    echo $informacaoClasse -> informaClasse();
?>