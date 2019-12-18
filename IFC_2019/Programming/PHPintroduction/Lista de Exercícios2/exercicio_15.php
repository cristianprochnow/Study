<?php
    $numeroMediador = (float) 0;
    $numeroMaior = (float) 0;

        for ($contador = 1; $contador <= 5; $contador++) {
            print "\n Digite o " . $contador . "º número: ";
                $numero = (float) fgets(STDIN);

                    if ($numero > $numeroMediador) {
                        $numeroMaior = $numero;
                    }

                        $numeroMediador = (float) $numero;
        }

            print "\n O maior número, dentre os inseridos, foi o " . $numeroMaior . " . \n\n";