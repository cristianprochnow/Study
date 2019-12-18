<?php
    print "\n Esse sistema é feito para selecionar uma playlist, e dentro dela músicas aleatórias de alguma lista de reprodução que você tenha dito o número correpondente anteriormente. \n\n";

        print " +---+--------------------------+ \n";
        print " | 1 |     Número Aleatório     | \n";
        print " +---+--------------------------+ \n";

            print "\n Escolha do usuário: ";
                $escolhaUsuario = (int) trim(fgets(STDIN));

                    function playlistAleatoria() {
                        print "\n Digite o número de playlists que você possui: ";
                            $numeroInseridoPlaylist = (int) trim(fgets(STDIN));
                            # Número de playlists que o usuário tem

                                $numeroPlaylist = rand((int) 1, (int) $numeroInseridoPlaylist);
                                # Função para definir um número aleatório, que será sorteado de 0 até o número que o usuário definiu anteriormente

                                    print "\n A playlist sorteada é a de posição equivalente a " . $numeroPlaylist . " \n\n";

                                        if ($numeroInseridoPlaylist <= 0) {
                                            exit("\n Número de playlist inválido. Tente novamente mais tarde \n\n");
                                        }
                                        # Se o usuário inserir um número menor ou igual a zero, o algoritmo será encerrado
                    }

                        function musicaAleatoria() {
                            print "\n Digite o número de músicas que estão contidas nesta playlist: ";
                                $numeroInseridoMusica = (int) trim(fgets(STDIN));
                                # Número de músicas que o usuário possui na playlist sorteada anteriormente

                                    $numeroMusica = rand((int) 1, (int) $numeroInseridoMusica);
                                    # Função para definir um número aleatório, que será sorteado de 0 até o número que o usuário definiu anteriormente

                                        print "\n A música sorteada é a de posição equivalente a " . $numeroMusica . " \n\n";

                                            if ($numeroInseridoMusica <= 0) {
                                                exit("\n Número de playlist inválido. Tente novamente mais tarde \n\n");
                                            }
                                            # Se o usuário inserir um número menor ou igual a zero, o algoritmo será encerrado
                        }

                            # Depois de definir estas funções, agora é que vai começar a estrutura de fato do algoritmo
                            if ($escolhaUsuario == 1) {
                            # Se o número que o usuário tiver inserido no início for igual a 1, então ocorrerá tudo o que está aqui dentro deste if
                                playlistAleatoria();
                                musicaAleatoria();
                                # Chamada das funções que, anteriormente, foram definidas
                                    
                                do {
                                    print "\n\n Você deseja realizar outro sorteio? [S/N] ";
                                        $respostaUsuario = fgetc(STDIN);
                                        # Se a resposta do usuário for "S" ou "s", então será executado o fi-else abaixo
        
                                            if ($respostaUsuario == 'S' || $respostaUsuario == 's') {
                                                playlistAleatoria();
                                                musicaAleatoria();
                                            }
                                            # Chamada das funções para realizar todo o algoritmo novamente por meio de funções

                                } while ($respostaUsuario == 'S' || $respostaUsuario == 's');                               
                                    
                                print "\n Até a próxima... \n\n";
                            
                            } else {
                                exit("\n Até a próxima... \n\n");
                            }
                            # Se a resposta do usuário for diferente de "S" ou "s", então o algoritmo será encerrado com a seguinte mensagem: "Até a próxima..."