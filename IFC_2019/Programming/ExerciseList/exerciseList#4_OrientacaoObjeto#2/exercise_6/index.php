<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>6º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="form-box">
                <form method="POST" action="process.php">
                    <fieldset class="aluno">
                        <legend>Estudante</legend>

                        <p>
                            <input type="text" name="nomeAluno" placeholder="Nome Completo" />
                            <input type="date" name="dataNascimento" placeholder="Data de Nascimento" />
                        </p>

                        <p>
                            <input type="number" name="codAluno" placeholder="Código de Identificação" />
                            <input type="number" name="pontosEnem" placeholder="Pontuação do Enem" />
                        </p>

                        <p>
                            <input type="reset" name="reset" value="Redefinir" />
                            <input type="submit" name="submit" value="Enviar Formulário" />
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>