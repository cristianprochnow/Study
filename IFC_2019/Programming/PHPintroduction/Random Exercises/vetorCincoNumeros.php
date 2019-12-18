<?php
    $contadorIntermediador = 1;
    $lista = ["", "", "", "", ""];

        for ($contador = 0; $contador <= 4; $contador++) {
                print "\n Digite o " . $contadorIntermediador . "º número: ";
                    $numeroUsuario = (int) fgets(STDIN);

                        $lista[$contador] = $numeroUsuario;

                            $contadorIntermediador++;
        }

            foreach ($lista as $intermediador) {
                print "\n";
                    print $intermediador;
            }

                print "\n\n";