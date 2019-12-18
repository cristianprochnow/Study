<?php
    $contador = 0;

    print "\n SISTEMA DE CADASTRO \n";

        print "\n Digite um nome qualquer, que deseja: ";
            $usuario_nome_cadastro = (string) fgets(STDIN);

                print "\n Digite a senha que deseja colocar em sua conta: ";
                    $usuario_senha_cadastro = (string) fgets(STDIN);

                        print "\n Você foi cadastrado \n";

    print "\n\n\n LOGIN \n";

        print "\n Digite seu nome de usuário: ";
            $usuario_nome_login = (string) fgets(STDIN);

                print "\n Digite sua senha: ";
                    $usuario_senha_login = (string) fgets(STDIN);

                        if ($usuario_nome_cadastro == $usuario_nome_login && $usuario_senha_cadastro == $usuario_senha_login) {
                            print "\n Login bem sucedido. \n\n ";
                        }
                        else {
                            while ($usuario_nome_cadastro != $usuario_nome_login || $usuario_senha_cadastro != $usuario_senha_login) {
                                $contador++;
                                print "\n\n $contador º tentativa \n";
                                    print "\n Usuário ou senha inválidos, por favor, tente novamente: \n";

                                        print "\n Digite seu nome de usuário: ";
                                            $usuario_nome_login = (string) fgets(STDIN);

                                                print "\n Digite sua senha: ";
                                                    $usuario_senha_login = (string) fgets(STDIN);

                                                        if ($contador == 5) {
                                                            exit("\n Número de tentativas excedido.\n\n");
                                                        }
                                }
                        }
?>