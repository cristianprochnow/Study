<?php
    print "\n Digite o primeiro número: ";
        $numero_primeiro = (float) fgets(STDIN);

            print "\n Digite o segundo número: ";
                $numero_segundo = (float) fgets(STDIN);

                    print "\n Digite o terceiro número: ";
                        $numero_terceiro = (float) fgets(STDIN);

                            $numeros = [$numero_primeiro, $numero_segundo, $numero_terceiro];

                                sort($numeros);

                                    print "\n O maior número inserido é " . $numeros[2] . " . Já o menor deles é " . $numeros[0] . " . \n\n";