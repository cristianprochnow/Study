<?php
    print "\n TABUADA \n";

        print "\n Digite o número que deseja obter a respectiva tabuada: ";
            $numero_usuario_tabuada = (float) fgets(STDIN);

                $contador = 1;

                print "\n";

                    for ($numero_sistema_tabuada = $numero_usuario_tabuada; $contador < 11; $contador++) {
                        $numero_multiplicacao = $numero_sistema_tabuada * $contador;
                                print " {$numero_sistema_tabuada} x {$contador} = {$numero_multiplicacao} \n";
                                    sleep(1);
                    }

                        print "\n";
?>