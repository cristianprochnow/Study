<?php
        print "\n Digite o primeiro número: ";
            $usuarioPrimeiroNumero = fgets(STDIN);

                print "\n Digite o segundo número: ";
                    $usuarioSegundoNumero = fgets(STDIN);

                    if ($usuarioPrimeiroNumero > $usuarioSegundoNumero) {
                        print "\n O primeiro número inserido é o maior, sendo ele " . $usuarioPrimeiroNumero . "\n";
                    }
                    elseif ($usuarioPrimeiroNumero == $usuarioSegundoNumero) {
                        print "\n Os dois números inseridos são iguais.\n";
                    }
                    else {
                        print "\n O segundo número inserido é o maior, sendo ele " . $usuarioSegundoNumero . "\n";
                    }

                        # Doesn't work...

                        #print "\n Deseja comparar mais dois números? [S/N] ";
                            #$usuarioResposta = fgetc(STDIN);

                            #while ($usuarioResposta == "s" || $usuarioResposta == "S") {
                                #print "\n Digite o primeiro número: ";
                                    #$usuarioPrimeiroNumero = fgets(STDIN);

                                        #print "\n Digite o segundo número: ";
                                            #$usuarioSegundoNumero = fgets(STDIN);

                                            #if ($usuarioPrimeiroNumero > $usuarioSegundoNumero) {
                                                #print "\n O primeiro número inserido é o maior, sendo ele " . $usuarioPrimeiroNumero . "\n";
                                            #}
                                            #elseif ($usuarioPrimeiroNumero == $usuarioSegundoNumero) {
                                                #print "\n Os dois números inseridos são iguais.\n";
                                            #}
                                            #else {
                                                #print "\n O segundo número inserido é o maior, sendo ele " . $usuarioSegundoNumero . "\n";
                                            #}

                                                #print "\n Deseja comparar mais dois números? [S/N] ";
                                                #$usuarioResposta = fgetc(STDIN);
                                            #}

                                                #if ($usuarioResposta == "n" || $usuarioResposta == "N") {
                                                    #print "\n Até a próxima... \n\n";
                                                #}