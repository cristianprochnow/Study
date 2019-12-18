<?php
    $numeroIntermediador = 0;
    # Número em que vão ser acumulados os valores que o usuário inserir, ou seja, serão somados todos os valores

        for ($contador = 1; $contador <= 5; $contador++) {
            print "\n Digite o " . $contador . "º número: ";
                $numero = (float) fgets(STDIN);
                    $numeroIntermediador += (float) $numero;
        }

            $media = (float) round($numeroIntermediador / ($contador - 1), 2);

                print "\n A soma dos número inseridos é igual a " . $numeroIntermediador . " e a média aritmética dos mesmos é igual a " . $media . "\n\n";