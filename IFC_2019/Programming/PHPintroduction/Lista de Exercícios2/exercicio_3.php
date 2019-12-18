<?php
    print "\n Digite seu sexo [F/M]: ";
        $usuarioSexo = fgetc(STDIN);

            function verificarSexo($usuarioSexoFuncao) {
                if ($usuarioSexoFuncao == "F" || $usuarioSexoFuncao == "f") {
                    print "\n F - Feminino \n";
                } elseif ($usuarioSexoFuncao == "M" || $usuarioSexoFuncao == "m") {
                    print "\n M - Masculino \n";
                } else {
                    print "\n Sexo inválido. \n";
                }
            }

                verificarSexo($usuarioSexo);