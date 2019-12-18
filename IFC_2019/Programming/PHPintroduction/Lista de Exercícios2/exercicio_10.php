<?php
    print "\n ax² + bx + c \n\n";

    print "\n Digite o valor equivalente a 'a': ";
        $a = (int) fgets(STDIN);

            print "\n Digite o valor equivalente a 'b': ";
                $b = (int) fgets(STDIN);

                    print "\n Digite o valor equivalente a 'c': ";
                        $c = (int) fgets(STDIN);

                            if ($a == 0) {
                                exit("\n O valor de 'a' é inválido, ou seja, esta não é uma equação do segundo grau.\n\n");
                            }

                                 $delta = (int) (pow($b, 2)) - (4*$a*$c);

                                    $xLinha = (int) (((-$b) + (sqrt($delta))) / (2*$a));
                                    $xDuasLinhas = (int) (((-$b) - (sqrt($delta))) / (2*$a));

                                        if ($delta < 0) {
                                            exit("\n O valor de Δ é negativo, sendo igual a $delta. Devido a isso, não existem raízes reais. \n\n");
                                        }
                                        elseif ($delta == 0) {
                                            print "\n O valor de Δ é igual a $delta, ou seja, a equação possui apenas uma raiz real, sendo ela $xLinha. \n\n";
                                        }
                                        else {
                                            print "\n O valor de Δ é igual a $delta. As duas raízes reais da equação são $xLinha e $xDuasLinhas. \n\n";
                                        }