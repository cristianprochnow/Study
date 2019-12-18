<?php
    print "\n Digite o tamanho da tábua em metros, que você deseja comprar (3 m, 4 m ou 5 m): ";
        $tamanho_da_tabua_em_metro = (int) fgets(STDIN);

        $tamanho_da_tabua_em_centimetro = $tamanho_da_tabua_em_metro * 100;

    if ($tamanho_da_tabua = 3) {
        $tamanho_da_tabua_dividido = $tamanho_da_tabua_em_centimetro / 45;
        $tamanho_da_tabua_modulo = $tamanho_da_tabua_em_centimetro % 45;
            print "\n Será possível cortar a tábua em " . floor($tamanho_da_tabua_dividido) . " pedaços \n \n";
                print " Sobrará um pedaço de " . $tamanho_da_tabua_modulo . " cm \n \n";
    }  
    elseif ($tamanho_da_tabua = 4) {
        $tamanho_da_tabua_dividido = $tamanho_da_tabua_em_centimetro / 45;
        $tamanho_da_tabua_modulo = $tamanho_da_tabua_em_centimetro % 45;
            print "\n Será possível cortar a tábua em " . floor($tamanho_da_tabua_dividido) . " pedaços \n \n";
                print " Sobrará um pedaço de " . $tamanho_da_tabua_modulo . " cm \n \n";
    }  
    elseif ($tamanho_da_tabua = 5) {
        $tamanho_da_tabua_dividido = $tamanho_da_tabua_em_centimetro / 45;
        $tamanho_da_tabua_modulo = $tamanho_da_tabua_em_centimetro % 45;
            print "\n Será possível cortar a tábua em " . floor($tamanho_da_tabua_dividido) . " pedaços \n \n";
                print " Sobrará um pedaço de " . $tamanho_da_tabua_modulo . " cm \n \n";
    }
    else {
        print "\n Não vendemos tábuas deste tamanho.";
    }
?>