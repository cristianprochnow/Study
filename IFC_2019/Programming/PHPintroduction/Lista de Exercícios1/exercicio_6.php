<?php
    print "\n\n Insira a temperatura em graus Celsius que deseja transformar em graus Fahrenheit: ";
        $temperaturaCelsius = (float) fgets (STDIN);

    $temperaturaFahrenheit = round((($temperaturaCelsius*9)/5)+32);

    print "\n\n $temperaturaCelsius ºC equivalem a aproximadamente $temperaturaFahrenheit ºF. \n\n"
?>