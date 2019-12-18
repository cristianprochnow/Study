<?php
    print "\n Qual das formas a seguir você deseja? ";
    print "\n\n 1)*     2) ***     3)    *";
    print     "\n   **       ***          **";
    print     "\n   ***      ***         ***";

        print "\n";

            print "\n Digite a seguir o número correspondente à forma que deseja: ";
                $respostaUsuario = fgets(STDIN);

                    print "\n";

                    switch ($respostaUsuario) {
                        case 1:
                            $trianguloHipotenusaDireita = ["*", "**", "***", "****", "*****", "******", "*******", "********"];
                                for ($contador = 0; $contador <= 7; $contador++) {
                                    print $trianguloHipotenusaDireita[$contador] . "\n";
                                }

                                        break;

                        case 2:
                            $quadrado = ["********", "********", "********", "********", "********", "********", "********", "********"];
                            for ($contador = 0; $contador <= 7; $contador++) {
                                print $quadrado[$contador] . "\n";
                            }

                            break;

                        case 3:
                            $trianguloHipotenusaEsquerda = ["       *", "      **", "     ***", "    ****", "   *****", "  ******", " *******", "********"];
                                for ($contador = 0; $contador <= 7; $contador++) {
                                    print $trianguloHipotenusaEsquerda[$contador] . "\n";
                                }

                                        break;
                    }
