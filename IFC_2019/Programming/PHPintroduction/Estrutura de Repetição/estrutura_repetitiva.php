<?php
    print "\n Digite um número inteiro: ";
        $numero = (int) fgets(STDIN);

        print "\n\n Digite um número (inteiro) limite para a soma (soma de +1) de seu número interior: ";
            $numero_limite = (int) fgets(STDIN);

            print "\n";

                while ($numero <= $numero_limite) {
                    sleep(1);
                    print "$numero \n";
                    $numero++;
                }
?>