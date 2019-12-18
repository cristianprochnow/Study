<?php

    $dia = 24 * 60;
    print "\n Minutos em um dia: $dia \n";

    $cigarro = 11 * 10;
    print "\n Minutos de vida perdidos devido ao cigarro: $cigarro \n";

    $ano = $dia * 365;
    print "\n Minutos em um ano: $ano \n";

    $cigarro_ano = $cigarro * 365;
    print "\n Minutos de vida perdidos em um ano: $cigarro_ano \n";

    $tres_anos = $ano * 3;
    print "\n Minutos em três anos: $tres_anos \n";

    $cigarro_tres_anos = $cigarro_ano * 3;
    print "\n Minutos de vida perdidos em três anos: $cigarro_tres_anos \n";

    $dias_tres_anos = $tres_anos / $dia;
    print "\n Dias em três anos: $dias_tres_anos \n";

    $dias_cigarro_tres_anos = $cigarro_tres_anos / $dia;
    print "\n Dias de vida perdidos em três anos: $dias_cigarro_tres_anos \n";

    print "\n";
?>