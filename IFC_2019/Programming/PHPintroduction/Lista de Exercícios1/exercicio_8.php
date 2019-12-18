<?php
    print "\n\n Você já fuma a quantos anos? ";
        $anosCigarro = (int) fgets (STDIN);

    print "\n\n Você fuma quantos cigarros por dia? ";
        $cigarrosDia = (int) fgets (STDIN);

    $minutosPerdidos = ($cigarrosDia * 10 * 365) * $anosCigarro;
        $horasPerdidas = $minutosPerdidos / 60;
            $diasPerdidos = round ($horasPerdidas / 24);

    print "\n\n Você já perdeu aproximadamente $diasPerdidos dias de vida. Parabéns... \n\n"
?>