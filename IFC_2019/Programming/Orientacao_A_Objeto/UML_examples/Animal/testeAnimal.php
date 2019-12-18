<?php
    require_once("Animal.php");
    require_once("Vaca.php");
    require_once("Leao.php");

    $vaca = new Vaca("Herbivoros", "Grama");
    $leao = new Leao("Carnivoros", "Carne");

    echo "<b>Objeto Vaca</b> <br>";
    echo "A Vaca pertence a familia dos " . $vaca->getFamilia() . " e come " . $vaca->getComida() . "<br><br>";
    
    echo "<b>Objeto Leao</b> <br>";
    echo "O Leao pertence a familia dos " . $leao->getFamilia() . " e come " . $leao->getComida();
?>