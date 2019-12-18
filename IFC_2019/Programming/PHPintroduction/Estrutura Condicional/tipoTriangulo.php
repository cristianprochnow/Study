<?php
    print "\n Digite a 1ª medida do triângulo: ";
        $primeiroLado = (float) fgets(STDIN);

    print "\n Digite a 2ª medida do triângulo: ";
        $segundoLado = (float) fgets(STDIN);

    print "\n Digite a 3ª medida do triângulo: ";
        $terceiroLado = (float) fgets(STDIN);

    if ($primeiroLado == $segundoLado and $segundoLado == $terceiroLado and $terceiroLado == $primeiroLado) {
        print "\n\n Este triângulo é equilátero, com medidas respectivas de $primeiroLado, $segundoLado e $terceiroLado \n\n";
    }
    elseif ($primeiroLado <> $segundoLado and $segundoLado <> $terceiroLado and $terceiroLado <> $primeiroLado) {
        print "\n\n Este triângulo é escaleno, com medidas respectivas de $primeiroLado, $segundoLado e $terceiroLado \n\n";
    }
    else {
        print "\n\n Este triângulo é isóceles, com medidas respectivas de $primeiroLado, $segundoLado e $terceiroLado \n\n";
    }
?>