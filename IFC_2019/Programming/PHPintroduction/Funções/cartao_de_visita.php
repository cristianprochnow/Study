<?php
    function cartaoVisita() {
        print "\nNome: Felizclévilson ALbertino.\n";
        print "Idade: 64 anos.\n";
        print "Sexo: depende do ponto de vista.\n";
        print "Estado civil: casado com si mesmo, muito amoroso para si.\n\n";
    }

        print "Você quer exprimir em sua tela, o cartão de visita do grande Felizclévilson? (S/N) ";
            $respostaUsuario = fgetc(STDIN);

                if ($respostaUsuario == "S" or $respostaUsuario == "s") {
                    cartaoVisita();
                }
                else {
                    exit("\nTá bom então...\n");
                }
?>