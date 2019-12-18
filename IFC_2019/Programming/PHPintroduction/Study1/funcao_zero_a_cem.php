<?php
    $contadorInicial = 0;

    print "\n";
    # Pula uma linha

    function contarZeroAteCem($contadorInicial) {
        for ($contador = $contadorInicial; $contador <= 100; $contador++) {
            print $contador . "\n";
        }
        # 'for' que conta de zero a cem
    }

        contarZeroAteCem($contadorInicial);