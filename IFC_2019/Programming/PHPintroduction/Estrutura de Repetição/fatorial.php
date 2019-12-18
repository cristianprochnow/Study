<?php
    print "\n Digite um número inteiro que deseja ver o fatorial: ";
        $numero_usuario = (int) fgets(STDIN);

            $numero_fatorando = 1;

                print "\n {$numero_usuario} = ";

                    for ($numero_fatorado = $numero_usuario; $numero_fatorado > 0; $numero_fatorado--) {
                            if ($numero_fatorado > 1) {
                                print "{$numero_fatorado} x ";
                            }
                            elseif ($numero_fatorado == 1) {
                                print "{$numero_fatorado} = ";
                            }
                                $numero_fatorando *= $numero_fatorado;
                    }
                        print "$numero_fatorando \n\n";
?>