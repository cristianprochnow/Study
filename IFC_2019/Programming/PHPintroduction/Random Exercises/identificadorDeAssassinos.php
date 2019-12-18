<?php
    $perguntas = ["Telefonou para a vítima? [S/N]", "Esteve no local do crime? [S/N]", "Mora perto da vítima? [S/N]", "Devia para a vítima? [S/N]", "Já trabalhou com a vítima? [S/N]"];

    $contadorDeSim = 0;

        for ($contador = 0; $contador < 5; $contador++) {
            print "\n";
                print $perguntas[$contador] . " ";
                    $resposta = (string) trim(fgetc(STDIN));

                        if ($resposta == "S" || $resposta == "s") {
                            $contadorDeSim++;
                        }
        }

            if ($contadorDeSim == 5) {
                exit("\n\n Você está preso! Coloque suas mãos em um lugar onde possamos vê-las. \n\n");
            }
            elseif ($contadorDeSim == 4 || $contadorDeSim == 3) {
                exit("\n\n Você está preso, pois é cúmplice deste crime... \n\n");
            }
            elseif ($contadorDeSim == 2) {
                exit("\n\n Iremos até sua residência. Precisamos fazer algumas perguntas... \n\n");
            }
            else {
                exit("\n\n Você é inocente. Perdão pelo incômodo. \n\n");
            }