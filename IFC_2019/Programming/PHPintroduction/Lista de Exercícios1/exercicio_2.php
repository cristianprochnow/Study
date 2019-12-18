<?php
    print "\n Digite uma quantidade de dias: ";
        $quantidadeDias = (int) fgets (STDIN);

    print "\n Digite uma quantidade de minutos: ";
        $quantidadeMinutos = (int) fgets (STDIN);

    print "\n Digite uma quantidade de segundos: ";
        $quantidadeSegundos = (int) fgets (STDIN);

    $segundosDia = $quantidadeDias * 86400;
    $segundosMinuto = $quantidadeMinutos * 3600;
    $segundosTotais = $segundosDia + $segundosMinuto + $quantidadeSegundos;

    print "\n \n Todos os dados que você inseriu, equivalem a $segundosTotais segundos. \n \n \n";
?>