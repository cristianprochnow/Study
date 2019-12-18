<?php
    print "\n Digite o primeiro número: ";
        $numeroPrimeiro = fgets(STDIN);

            print "\n Digite o segundo número: ";
                $numeroSegundo = fgets(STDIN);

                    print "\n Digite o terceiro número: ";
                        $numeroTerceiro = fgets(STDIN);

                            $numeros = [$numeroPrimeiro, $numeroSegundo, $numeroTerceiro];

                                print "\n\n Os números em ordem decrescente é: \n\n";

                                    rsort($numeros);

                                        foreach ($numeros as $intermediador) {
                                            print $intermediador;
                                        }