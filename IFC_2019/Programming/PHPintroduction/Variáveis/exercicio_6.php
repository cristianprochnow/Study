<?php
    print "\n Insira a medida de um dos lados do quadrado: ";
        $primeiro_lado_do_quadrado = (float) fgets(STDIN);

    print "\n Insira a medida de um dos outros lados do quadrado: ";
        $segundo_lado_do_quadrado = (float) fgets(STDIN);

    print "\n O valor encontra-se em metros(m) ou centímetros(cm)? ";
        $unidade_de_medida_do_valor = (string) fgets(STDIN);

        if ($unidade_de_medida_do_valor == 'm') {                $area_do_quadrado = $primeiro_lado_do_quadrado * $segundo_lado_do_quadrado;
                print "\n A área desse quadrado é exatamente $area_do_quadrado m²\n";
                    $dobro_da_area_do_quadrado = $area_do_quadrado * 2;
                        print "\n Um quadrado duas vezes maior teria $dobro_da_area_do_quadrado de área m²\n \n";
        } else {
            $area_do_quadrado = $primeiro_lado_do_quadrado * $segundo_lado_do_quadrado;
                print "\n A área desse quadrado é exatamente $area_do_quadrado cm² \n";
                    $dobro_da_area_do_quadrado = $area_do_quadrado * 2;
                        print "\n Um quadrado duas vezes maior teria $dobro_da_area_do_quadrado de área cm²\n \n";
        }

?>