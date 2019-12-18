<?php
    print "\n Digite o primeiro valor: ";
        $primeiroNumero = (float) fgets(STDIN);

    print "\n Digite o segundo valor: ";
        $segundoValor = (float) fgets(STDIN);

        print "\n \n O primeiro valor digitado foi: $primeiroNumero";

        print "\n O segundo valor digitado foi: $segundoValor";

    $valor_que_assume_valor_do_segundo = $primeiroNumero;
    $valor_que_assume_valor_do_primeiro = $segundoValor;

        print "\n O valor que agora assume o lugar do primeiro valor é: $valor_que_assume_valor_do_primeiro";

        print "\n O valor que agora assume o lugar do segundo valor é: $valor_que_assume_valor_do_segundo \n";

?>