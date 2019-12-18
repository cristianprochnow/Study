<?php
    print "\n Digite um valor: ";
        $primeiroValor = (int) fgets(STDIN);

    print "\n Digite mais um valor: ";
        $segundoValor = (int) fgets(STDIN);

    $valorTotal = $primeiroValor + $segundoValor;

    print "\n A soma dos valores é: $valorTotal \n \n";
?>