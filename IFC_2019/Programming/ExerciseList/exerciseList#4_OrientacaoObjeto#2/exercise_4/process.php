<?php

    require_once('_class/Cafe.php');

    if (isset($_POST['submit'])) {

        $nomeBebida = trim($_POST['nomeBebida']);
        $calorias = trim($_POST['caloriasBebida']);

        $bebida = new Bebida($nomeBebida, $calorias);

        if (!empty($_POST['porcentagemCafeina'])) {

            $porcentagemCafeina = trim($_POST['porcentagemCafe']);

            $cafe = new Cafe($nomeBebida, $calorias, $porcentagemCafeina);
            
            print $cafe;
            print '<br />';
            print '<br />';
            print $cafe -> getBeverages();

        } else {

            print $bebida;
            print '<br />';
            print '<br />';
            print 'Número total de bebidas: ' . $bebida -> getBeverages();

        }

    }

?>