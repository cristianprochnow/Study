<?php
    print "\n\n Você percorreu quantos quilômetros com o carro? ";
        $quilometragemCarro = (float) fgets (STDIN);

    print "\n\n Quantos dias você ficou com o carro? ";
        $diasCarro = (int) fgets (STDIN);
        
    $precoQuilomentragem = $quilometragemCarro * 0.15;
    $precoCarro = $diasCarro * 60;
    
    (float) $custoTotal = (float) $precoQuilomentragem + (float) $precoCarro;

    print "\n\n O custo total a pagar é de R$ $custoTotal \n\n"
?>