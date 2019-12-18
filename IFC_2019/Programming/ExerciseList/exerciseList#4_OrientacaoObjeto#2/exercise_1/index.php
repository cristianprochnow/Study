<?php
    require_once('_class/Porta.php');
    require_once('_class/PortaEletrica.php');

    $porta_1 = new Porta('Fortaleza Portas', 23, 34);
    print $porta_1;

    print '<br>';
    print '<br>';

    $porta_2 = new PortaEletrica('220V' ,'Eletricidade que abre portas', 12, 23);
    print $porta_2;

    print '<br>';
    print '<br>';
    print '<br>';

    print 'Total de portas inseridas até o momento = ' . $porta_1 -> getTotalPortas();

?>