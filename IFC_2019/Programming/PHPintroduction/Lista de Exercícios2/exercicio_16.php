<?php
    $soma = 0;

        for ($contador = 1; $contador <= 5; $contador++) {
            print "\n Digite o " . $contador . "º número: ";
                $numero = (float) fgets(STDIN);

                    $soma += (float) $numero;

                        $media = (float) round($soma / $contador, 1);
        }

            print "\n A soma de todos os números inseridos é igual a " . $soma . ". E a média aritmética desses números é igual a " . $media . " . \n\n";