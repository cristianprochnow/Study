<?php
    print "\n Digite seu salário atual, em real(não use a unidade que determina qual a moeda. Ex: R$): ";
        $valorSalario = (float) fgets (STDIN);

    print "\n Digite a porcentagem de aumento que você vai receber: ";
        $valorAumento = (float) fgets (STDIN);

        $porcentagemAumento = $valorAumento / 100;
        $quantia_aumentada_do_salario = $porcentagemAumento * $valorSalario;
        $salario_com_aumento = $quantia_aumentada_do_salario + $valorSalario;
    
            print "\n\n O valor a mais que você vai receber é: R$ $quantia_aumentada_do_salario";
                print "\n\n O seu salário, com esse aumento será R$ $salario_com_aumento \n\n";
?>