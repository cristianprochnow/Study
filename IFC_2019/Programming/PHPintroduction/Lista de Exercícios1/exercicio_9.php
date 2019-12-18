<?php
    print "\n\n Digite a área quadrada que você deseja pintar: ";
        $areaQuadrada = (float) fgets (STDIN);

    $coberturaTinta = 1/6;
    $tinta_que_vai_ser_usada = $coberturaTinta * $areaQuadrada;

    print "\n\n +---------------------+--------+ \n";
        print " |Apenas latas de 18 L |Digite 1| \n";
        print " |Apenas latas de 3,6 L|Digite 2| \n";
        print " |    Personalizar     |Digite 3| \n";
        print " +---------------------+--------+ \n\n";

            print "\n Sua escolha: ";
                $escolhaCliente = (int) fgets (STDIN);

        switch ($escolhaCliente) {

            case 1:
                if ($areaQuadrada < 108) {
                    print "\n\n Você usará apenas um galão de tinta de 18L. O valor final é R$ 80,00\n\n";
                }
                elseif ($areaQuadrada == 108) {
                    print "\n\n Você usará exatamente um galão de tinta de 18L. O valor final é R$ 80,00 \n\n";
                }
                elseif ($areaQuadrada > 108) {
                    $quantidadeGalao = ceil($areaQuadrada / 108);
                    (float) $precoTotal = $quantidadeGalao * 80;
                        print "\n\n Serão necessários $quantidadeGalao galões de 18L. O valor final é R$ $precoTotal \n\n";
                }
            break;

            case 2:
                if ($areaQuadrada < 21.6) {
                    print "\n\n Você usará apenas uma lata de tinta de 3,6L. O valor final é R$ 25,00\n\n";
                }
                elseif ($areaQuadrada == 21.6) {
                    print "\n\n Você usará exatamente uma lata de tinta de 3,6L. O valor final é R$ 25,00 \n\n";
                }
                elseif ($areaQuadrada > 21.6) {
                    $quantidadeLata = ceil($areaQuadrada / 21.6);
                    $precoTotal = $quantidadeLata * 25;
                        print "\n\n Serão necessários $quantidadeLata latas de tinta de 3,6L. O valor final é R$ $precoTotal \n\n";
                }
            break;

            case 3:
                
            break;
        }
?>