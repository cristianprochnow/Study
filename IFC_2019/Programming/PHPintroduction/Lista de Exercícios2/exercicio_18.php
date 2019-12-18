<?php

    $contadorImpar = 0;
    $contadorPar = 0;

        for ($contador = 1; $contador <= 10; $contador++) {
            print "\n Digite o " . $contador . "º número (inteiro): ";
                $numero = (int) fgets(STDIN);

                    if ( ($numero%2) == 0 ) {
                        $contadorPar += 1;
                    }
                    else {
                        $contadorImpar += 1;
                    }
        }

            if ($contadorImpar == 1 && $contadorPar != 1) {
                print "\n Dos números que foram inseridos, " . $contadorImpar . " deles é ímpar e " . $contadorPar . " deles são pares. \n\n";
            }
            elseif ($contadorPar == 1 && $contadorImpar != 1) {
                print "\n Dos números que foram inseridos, " . $contadorImpar . " deles são ímpares e " . $contadorPar . " deles é par. \n\n";
            }
            else {
                print "\n Dos números que foram inseridos, " . $contadorImpar . " deles são ímpares e " . $contadorPar . " deles são pares. \n\n";
            }