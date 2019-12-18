<?php

    require_once('_class/ContaTelefone.php');

    $conta_1 = new ContaTelefone('Felizclevilson', '(47) 9 9999-9999');
    print $conta_1;
    print '<br>';
    print '<br>';
    print $conta_1 -> getNumeroTotalContas();

?>