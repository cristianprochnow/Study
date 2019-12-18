<?php
    print "\n Digite a primeira nota: ";
        $primeiraNota = (float) fgets(STDIN);

    print "\n Digite a segunda nota: ";
        $segundaNota = (float) fgets(STDIN);

    print "\n Digite a terceira nota: ";
        $terceiraNota = (float) fgets(STDIN);

    print "\n Digite a quarta nota: ";
        $quartaNota = (float) fgets(STDIN);

        $soma_das_notas = $primeiraNota + $segundaNota + $terceiraNota + $quartaNota;
        $media_das_notas = round($soma_das_notas / 4, 2);

            print "\n A soma de todas as notas é: $soma_das_notas \n";

            print "\n A média final é: $media_das_notas \n \n";
?>