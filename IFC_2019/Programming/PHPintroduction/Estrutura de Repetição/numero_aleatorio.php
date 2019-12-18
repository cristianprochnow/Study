<?php
    print "\n Será sorteado um número aleatório de 0 a 10.\n\n";
        $numero_aleatorio = (int) rand(1,10);

    $numero_tentativa = 1;

    print "\n $numero_tentativa º tentativa\n";
        print "\n Digite um número nesse intervalo para tentar acertar: ";
            $numero_usuario = (int) fgets(STDIN);

            if ($numero_usuario < $numero_aleatorio) {
                print "\n O número sorteado é maior \n";
            }
            elseif ($numero_usuario > $numero_aleatorio) {
                print "\n O número sortado é menor \n";
            }

        if ($numero_usuario == $numero_aleatorio) {
            print "\nVocê acertou!\n";
        }
        else {
            while ($numero_aleatorio != $numero_usuario) {
                $numero_tentativa++;
                    print "\n\n $numero_tentativa º tentativa\n";
                        print "\n Errou! Digite um outro número: ";
                            $numero_usuario = (int) fgets(STDIN);
                                $numero_aleatorio = (int) rand(1,10);

                                if ($numero_usuario < $numero_aleatorio) {
                                    print "\n O número sorteado é maior \n";
                                } elseif ($numero_usuario > $numero_aleatorio) {
                                    print "\n O número sortado é menor \n";
                                }
            }
            print "\n Você acertou! \n\n";
        }
?>