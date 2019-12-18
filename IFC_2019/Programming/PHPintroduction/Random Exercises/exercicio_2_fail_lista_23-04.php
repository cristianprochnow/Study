<?php
    print "\nDigite um número: ";
        $usuarioNumero = fgets(STDIN);

            if ($usuarioNumero > 0) {
                print "\n O número inserido é positivo.";
            }
            else {
                print "\n O número inserido é negativo.";
            }

            do {
                print "\n Deseja inserir outro número? [S/N] ";
                $usuarioResposta = fgetc(STDIN);

                if ($usuarioResposta == "S" || $usuarioResposta == "s") {

                    print "\n Digite um número: ";
                    $usuarioOutroNumero = fgets(STDIN);

                        if ($usuarioOutroNumero > 0) {
                            print "\n O número inserido é positivo.\n";
                        } else {
                            print "\n O número inserido é negativo.\n";
                        }
                        }
                        else {
                            exit("\nTá bom então...\n\n");
                        }

            } while ($usuarioResposta == "S" || $usuarioResposta == "s");
?>