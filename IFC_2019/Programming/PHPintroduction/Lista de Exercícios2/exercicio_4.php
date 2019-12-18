<?php
    print "\n Digite uma letra: ";
        $letra = fgetc(STDIN);

            function verificarLetra($letraFuncao) {
                 if ( ($letraFuncao == "a" || $letraFuncao == "A") || ($letraFuncao == "E" || $letraFuncao == "e") || ($letraFuncao == "I" || $letraFuncao == "i") || ($letraFuncao == "O" || $letraFuncao == "o") || ($letraFuncao == "U" || $letraFuncao == "u") ) {
                     print "\n A letra inserida é uma vogal, sendo ela " . $letraFuncao . "\n\n";
                 }
                 else {
                     print "\n A letra inserida é uma consoante, sendo ela " . $letraFuncao . "\n\n";
                 }
            }

                verificarLetra($letra);