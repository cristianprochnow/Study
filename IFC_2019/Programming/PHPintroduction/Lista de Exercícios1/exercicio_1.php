<?php
    print "\n Digite o valor em metros(m) que deseja converter em milímetros(mm): ";
        $valor_em_metros = (float) fgets (STDIN);

            $valor_em_centimetros = $valor_em_metros * 1000;

                print "\n $valor_em_metros m equivalem a $valor_em_centimetros mm. \n \n";          
?>