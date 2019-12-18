<?php 

print "Digite um nímero menor que 1000: ";
$n = (int) fgets(STDIN);

if(strlen($n)==3){
    if (substr($n, 0,1)>1 && substr($n,1,1)>1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centenas, " . substr($n,1,1) . " dezenas e " . substr($n,2,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)>1 && substr($n,2,1)==1){
        print substr($n,0,1) . " centenas, " . substr($n,1,1) . " dezenas e " . substr($n,2,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==1 && substr($n,2,1)==1){
        print substr($n,0,1) . " centenas, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centenas, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)>1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezenas e " . substr($n,2,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)>1 && substr($n,2,1)==1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezenas e " . substr($n,2,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1 && substr($n,2,1)==1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidades.\n\n";
    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1 && substr($n,2,1)>1){
        print substr($n,0,1) . " centena, " . substr($n,1,1) . " dezena e " . substr($n,2,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)>1 && substr($n,2,1)==0){
        print substr($n,0,1) . " centenas e " . substr($n,1,1) . " dezenas.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==1 && substr($n,2,1)==0){
        print substr($n,0,1) . " centenas e " . substr($n,1,1) . " dezena.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)>1 && substr($n,2,1)==0){
        print substr($n,0,1) . " centena e " . substr($n,1,1) . " dezenas.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1 && substr($n,2,1)==0){
        print substr($n,0,1) . " centena e " . substr($n,1,1) . " dezena.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==0 && substr($n,2,1)==0){
        print substr($n,0,1) . " centenas.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==0 && substr($n,2,1)==0){
        print substr($n,0,1) . " centena.\n\n";
    }
}

if(strlen($n)==2){
    if(substr($n, 0,1)>1 && substr($n,1,1)>1){
        print substr($n,0,1) . " dezenas e " . substr($n,1,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==1){
        print substr($n,0,1) . " dezenas e " . substr($n,1,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)>1){
        print substr($n,0,1) . " dezena e " . substr($n,1,1) . " unidades.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==1){
        print substr($n,0,1) . " dezena e " . substr($n,1,1) . " unidade.\n\n";

    }elseif(substr($n, 0,1)>1 && substr($n,1,1)==0){
        print substr($n,0,1) . " dezenas.\n\n";

    }elseif(substr($n, 0,1)==1 && substr($n,1,1)==0){
        print substr($n,0,1) . " dezena.\n\n";
    }
}

if(strlen($n)==1){
    if(substr($n, 0,1)>1){
        print substr($n,0,1) . " unidades.\n\n";
    }else{
        print substr($n,0,1) . " unidade.\n\n";
    }
}

?>