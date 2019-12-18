<?php
    $numeroPar = 0;
    $numeroImpar = 0;

    for ($contador = 1; $contador <= 10; $contador++) {
        print "\n Digite um número aleatório: ";
            $numero = fgets(STDIN);

                if ($numero%2 == 0) {
                    $numeroPar += 1;
                } else {
                    $numeroImpar +=1;
                }
    }

        print "\n Foram inseridos " . $numeroPar . " numeros pares e " . $numeroImpar . " números impares. \n\n";