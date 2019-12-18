<?php
    print "\n Digite o preço do primeiro produto: ";
        $numero_primeiro = (float)fgets(STDIN);

            print "\n Digite o preço do segundo produto: ";
                $numero_segundo = (float)fgets(STDIN);

                    print "\n Digite o preço do terceiro produto: ";
                        $numero_terceiro = (float)fgets(STDIN);

                            $numeros = [$numero_primeiro, $numero_segundo, $numero_terceiro];

                                sort($numeros);

                                    print "\n\n O produto mais recomendado para compra é o de preço igual a R$ " . $numeros[0] . "\n\n";