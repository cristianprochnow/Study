<?php
        print "\n Qual o nome do aluno? ";
            $alunoNome = (string) fgets(STDIN);

                print "\n Qual a média de aprovação do seu sistema de ensino? ";
                    $mediaGeral = (float) fgets(STDIN);

                        print "\n Qual a nota máxima que um aluno pode alcançar? ";
                            $notaMaxima = (float) fgets(STDIN);

                                print "\n Digite a primeira nota de " . $alunoNome . ": ";
                                    $alunoPrimeiraNota = (float) fgets(STDIN);

                                        print "\n Digite a segunda nota de " . $alunoNome . ": ";
                                            $alunoSegundaNota = (float) fgets(STDIN);

                                                if ($alunoPrimeiraNota > $notaMaxima || $alunoSegundaNota > $notaMaxima) {
                                                    exit("\n Notas inválidas, tente novamente mais tarde. \n\n");
                                                }

                                                    function calcularMedia($alunoPrimeiraNota, $alunoSegundaNota) {
                                                        return round(($alunoPrimeiraNota + $alunoSegundaNota) / 2,2);
                                                    }

                                                        $alunoMedia = 0;

                                                            function verificarAprovacao($alunoNome, $alunoPrimeiraNota, $alunoSegundaNota, $alunoMedia, $mediaGeral, $notaMaxima) {
                                                                $alunoMedia += calcularMedia($alunoPrimeiraNota, $alunoSegundaNota);
                                                                    if ($alunoMedia == $notaMaxima) {
                                                                        print "\n" . $alunoNome . "foi aprovado com distinção, pois sua média é igual a " . $alunoMedia . "\n\n";
                                                                    }
                                                                    elseif ($alunoMedia >= $mediaGeral ) {
                                                                        print "\n" . $alunoNome . "foi aprovado, com media igual a " . $alunoMedia . "\n\n";
                                                                    }
                                                                    else {
                                                                        print "\n" . $alunoNome . "está reprovado, pois sua média é igual a " . $alunoMedia . "\n\n";
                                                                    }
                                                            }

                                                                verificarAprovacao($alunoNome, $alunoPrimeiraNota, $alunoSegundaNota, $alunoMedia, $mediaGeral, $notaMaxima);