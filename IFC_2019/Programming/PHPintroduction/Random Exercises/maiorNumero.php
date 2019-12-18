<?php
    $numeroMaior = (float) 0;
        # Inicialmente, o maior número é equivalente a zero

    for ($contador=1; $contador <= 10; $contador++) { 
        print "\n Digite o " . $contador . "º número: ";
            $numero = (float) fgets(STDIN);
                # Contador que faz com que o usuário insira dez número aleatórios
            
                if ($numero > $numeroMaior) {
                    $numeroMaior = $numero;
                }
                    # Se o número inserido for maior que o anterior, seu valor vai para dentro de $numeroMaior
    }

        print "\n O maior número inserido foi o $numeroMaior. \n\n";
            # Mostra qual o maior número inserido