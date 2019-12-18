<?php
    print "\n\n Digite o valor de a: ";
        $a = (float) fgets (STDIN);

        print "\n\n Digite o valor de b: ";
            $b = (float) fgets (STDIN);

            print "\n\n Digite o valor de c: ";
                $c = (float) fgets (STDIN);

    $delta = ((pow($b,2)-4)*$a*$c);

    $x1 = round(((-$b + sqrt ($delta)) / (2*$a)),2);
    $x2 = round(((-$b - sqrt ($delta)) / (2*$a)),2);

    print "\n\n O valor de a é: $a";
        print "\n\n O valor de b é: $b";
            print "\n\n O valor de Δ é: $delta";
                print "\n\n O valor de x¹: $x1";
                    print "\n\n O valor de x²: $x2";

                        print "\n\n";
?>