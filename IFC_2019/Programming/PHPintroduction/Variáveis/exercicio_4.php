<?php
    print "\nDigite o valor em metros que deseja converter para centímetros (se for um número decimal, coloque um ponto ao invés da vírgula): ";
        $valor_em_metros = (float) fgets(STDIN);

echo "\n";

    $valor_em_centimetros = $valor_em_metros * 100;

        echo "\n" . $valor_em_metros . " metros equivale a " . $valor_em_centimetros . " centímetros." . "\n" . "\n";
?>