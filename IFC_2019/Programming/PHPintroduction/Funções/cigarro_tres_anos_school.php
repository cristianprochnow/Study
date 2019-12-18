<?php

    print "\n Há quantos anos você já fuma? ";
        $anos_fumados = (int) fgets(STDIN);

    print "\n Quantos cigarros você fuma por dia? ";
        $cigarros_fumados_usuario = (int) fgets(STDIN);

    $cigarros_fumados_tres_anos = $anos_fumados*10*365;

    $minutos_perdidos = $cigarros_fumados_tres_anos * $cigarros_fumados_usuario;

    $horas_perdidas = $minutos_perdidos / 60;

    $dias_perdidos = round ($horas_perdidas / 24);

        print "\n Você perdeu " . $dias_perdidos . " dias de vida devido ao cigarro \n \n";
?>