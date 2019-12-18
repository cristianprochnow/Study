<?php
    print "\n\n Digite o tempo que se deseja completar essa viagem (em horas): ";
        $tempoViagem = (float) fgets (STDIN);
        
    print "\n\n Digite a velocidade média estimada para essa viagem (em km/h): ";
        $velocidadeMediaViagem = (float) fgets (STDIN);

    $distanciaViagem = $tempoViagem * $velocidadeMediaViagem;

    print "\n\n A distância a ser percorrida é $distanciaViagem km \n\n";


    // Not working

    //print "\n\n Você prefere o sistema de m/s (1) ou km/h (2)? ";
        //$unidade_de_medida_velocidade = (int) fgets (STDIN);

    //if ($unidade_de_medida_velocidade = "1"){
        //print "\n\n Digite o tempo que se deseja completar essa viagem (em segundos): ";
        //$tempoViagem = (float) fgets (STDIN);

        //print "\n\n Digite a velocidade média estimada para essa viagem (em m/s): ";
        //$velocidadeMediaViagem = (float) fgets (STDIN);

        //$distanciaViagem = $tempoViagem * $velocidadeMediaViagem;

        //print "\n\n A distância a ser percorrida é $distanciaViagem m \n\n";
    //} 

    //elseif ($unidade_de_medida_velocidade = "2") {
        //print "\n\n Digite o tempo que se deseja completar essa viagem (em horas): ";
        //$tempoViagem = (float) fgets (STDIN);

        //print "\n\n Digite a velocidade média estimada para essa viagem (em km/h): ";
        //$velocidadeMediaViagem = (float) fgets (STDIN);

        //$distanciaViagem = $tempoViagem * $velocidadeMediaViagem;

        //print "\n\n A distância a ser percorrida é $distanciaViagem km \n\n";
    //}

    //else {
        //print "\n\n Unidade de medida inválida \n\n";
    //}
?>