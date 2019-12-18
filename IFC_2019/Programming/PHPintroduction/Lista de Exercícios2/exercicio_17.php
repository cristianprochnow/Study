-*<?php
    print "\n Digite a base de sua exponenciação: ";
        $base = (float) fgets(STDIN);

            print "\n Digite o expoente de sua exponenciação: ";
                $expoente = (float) fgets(STDIN);

                    $exponenciacao = (float) $base ** $expoente;

                        print "\n O resultado da exponenciação é igual a " . round($exponenciacao, 2) . " . " . "Tendo como base " . $base . " e como expoente " . $expoente . " . \n\n";