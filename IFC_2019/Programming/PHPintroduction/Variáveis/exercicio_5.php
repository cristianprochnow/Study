<?php
    print "\n Digite o valor equivalente ao raio do círculo: ";
        $raio_do_circulo = (float) fgets(STDIN);

    print "\n O valor encontra-se em metros(m), centímetros(cm) ou milímetros(mm)? ";
        $unidade_de_medida_do_valor = (string) fgets(STDIN);

        if ($unidade_de_medida_do_valor == 'm') {
            $area_do_circulo_em_metros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                print "\n A área deste círculo é exatamente: $area_do_circulo_em_metros m² \n \n";
    } elseif ($unidade_de_medida_do_valor == 'cm') {
            $area_do_circulo_em_centimetros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                print "\n A área deste círculo é exatamente: $area_do_circulo_em_centimetros cm² \n \n";
    } elseif ($unidade_de_medida_do_valor == 'mm') {
            $area_do_circulo_em_milimetros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                print "\n A área deste círculo é exatamente: $area_do_circulo_em_milimetros mm² \n \n";
    } else {
            $area_do_circulo = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                print "\n A area do círculo é igual a $area_do_circulo m²/cm²/mm² \n \n";
    }

    //switch($unidade_de_medida_do_valor) {
        //case "m":

            //$area_do_circulo_em_metros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                //print "\n A área deste círculo é exatamente: $area_do_circulo_em_metros m² \n \n";
        //break;

        //case "cm":
            //$area_do_circulo_em_centimetros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                //print "\n A área deste círculo é exatamente: $area_do_circulo_em_centimetros cm² \n \n";
        //break;

        //case "mm":
            //$area_do_circulo_em_milimetros = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                //print "\n A área deste círculo é exatamente: $area_do_circulo_em_milimetros mm² \n \n";
        //break;

        //default:
            //$area_do_circulo = 3.14 * ($raio_do_circulo * $raio_do_circulo);
                //print "\n A area do círculo é igual a $area_do_circulo \n \n";
    //}
?>