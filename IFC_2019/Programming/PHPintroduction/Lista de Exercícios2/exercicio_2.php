<?php
        print "\n Digite algum número: ";
            $numeroUsuario = fgets(STDIN);

                if ($numeroUsuario < 0) {
                    print "\n O número inserido é negativo, sendo ele " . $numeroUsuario . "\n\n";
                }
                else {
                    print "\n O número inserido é positivo, sendo ele " . $numeroUsuario . "\n\n";
                }