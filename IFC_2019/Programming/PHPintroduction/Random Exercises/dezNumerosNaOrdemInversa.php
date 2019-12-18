<?php
    $contadorDeInsercao = 1;
    # Vai ser apenas o contador que vai definir na estética do algoritmo, ficando: "digite o 1º número", "digite o 2º número" etc.

        $listaDezValores = ["", "", "", "", "", "", "", "", "", ""];

            for ($contador = 0; $contador < 10; $contador++) {
                print "\n Digite o " . $contadorDeInsercao . "º número: ";
                    $numeroUsuario = (float) fgets(STDIN);

                        $listaDezValores[$contador] = $numeroUsuario;

                            $contadorDeInsercao++;
            }

                array_reverse($listaDezValores);
                # Função que reverte a ordem dos valores de um vetor

                    print "\n Os números inseridos, de forma reversa, são equivalentes a: ";

                        for ($contador = 9; $contador >= 0; $contador--) {
                            print $listaDezValores[$contador];
                                print " ";
                        }

                            print "\n\n";