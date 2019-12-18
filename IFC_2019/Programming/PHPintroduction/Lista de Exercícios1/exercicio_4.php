<?php
    print "\n Digite o preço da mercadoria, em reais: ";
        $precoMercadoria = (float) fgets (STDIN);

    print "\n Digite o percentual de desconto da mercadoria: ";
        $descontoMercadoria = (float) fgets (STDIN);

        $descontoTotal = $descontoMercadoria / 100;
        $valor_de_desconto_da_mercadoria = $precoMercadoria * $descontoTotal;
        $valor_final_da_mercadoria = $precoMercadoria - $valor_de_desconto_da_mercadoria;

            print "\n \n Você vai receber R$ $valor_de_desconto_da_mercadoria de desconto";
                print "\n \n O valor final da mercadoria é R$ $valor_final_da_mercadoria \n \n";
?>