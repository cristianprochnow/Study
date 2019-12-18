<?php
    function compararDoisNumeros() {

        print "\n";
        print "Digite o primeiro número: ";
            $primeiroNumero = (float) fgets(STDIN);

                print "\n";
                print "Digite o segundo número: ";
                    $segundoNumero = (float) fgets(STDIN);

                    if ($primeiroNumero > $segundoNumero) {
                        print "\nO primeiro número é o maior. Sendo ele igual a " . $primeiroNumero . "\n\n";
                    }
                    elseif ($segundoNumero > $primeiroNumero) {
                        print "\nO segundo número é o maior. Sendo ele igual a " . $segundoNumero . "\n\n";
                    }
    }

        compararDoisNumeros();

                 do {
                     print "Você quer comparar outros dois números? [S/N] ";
                     $respostaUsuario = fgetc(STDIN);

                     if ($respostaUsuario == "S" || $respostaUsuario == "s") {
                         compararDoisNumeros();
                     } else {
                         exit("\nAté a próxima...\n\n");
                     }
                 } while ($respostaUsuario == "S" || $respostaUsuario == "s");