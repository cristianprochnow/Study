<?php
    print "\n\n Digite o peso de seu catioro: ";
        $pesoCachorro = (float) fgets (STDIN);

    if ($pesoCachorro <= 2) {
        print "\n\n Esse catioro é peso galo, certeza que não é transante o bastante";
    }
    elseif ($pesoCachorro <= 10) {
        print "\n\n Esse catioro é de mais respeito, tá quase como um Labrador (mas ainda tá longe...)";
    }
    else {
        print "\n\n Dê um mito à esse Oscar, esse merece respeito (Labrador Feels Good). \n\n";
    }
?>