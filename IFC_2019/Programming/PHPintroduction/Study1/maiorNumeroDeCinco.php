<?php
    print "\n";

        $numeroMaior = (float) 0;
        $numeroMediador = (float) 0;

            for ($contador = 1; $contador <= 5; $contador++) {
                print "Digite o " . $contador . "º número: ";
                    $numero = (float) fgets(STDIN);

                        if ($numero > $numeroMaior) {
                            $numeroMaior = (float) $numero;
                        }
            }

                print "\n O maior número inserido foi '" . $numeroMaior . "'. \n\n";