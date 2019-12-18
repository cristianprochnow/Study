<?php
    print "\n Digite o nome do aluno: ";
        $aluno_nome = (string) fgets(STDIN);

        print "\n Digite a nota do aluno $aluno_nome: ";
            $aluno_nota = (float) fgets(STDIN);

            while ($aluno_nota < 0 or $aluno_nota > 10) {
                print "\n Nota inválida, digite outra nota: ";
                    $aluno_nota = (float) fgets(STDIN);
            }

                print "\n Nota registrada \n\n";
?>