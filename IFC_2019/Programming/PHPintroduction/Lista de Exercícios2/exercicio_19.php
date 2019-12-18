<?php

    $numeroPrimeiro = 1;
    $numeroSegundo = 0;

        print "\n";

            do {
                $numeroPrimeiro = $numeroSegundo + $numeroPrimeiro;
                $numeroSegundo = $numeroPrimeiro - $numeroSegundo;

                    print $numeroPrimeiro . "\n";
            } while ($numeroPrimeiro <= 500);