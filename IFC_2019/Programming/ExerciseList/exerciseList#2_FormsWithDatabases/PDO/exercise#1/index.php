<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title> 1º Exercício </title>
    </head>

    <body>
        <form method="POST" action="data-process.php">
            <h1> Inserção de Dados </h1>

            <p> <input type="text" name="nome_membro" placeholder="Nome do Membro"> </p>
            <p> <input type="email" name="email" placeholder="Email"> </p>
            <p> <input type="number" name="numero" placeholder="Número do Membro"> </p>
            <p> <input type="text" name="nome_equipe" placeholder="Nome da Equipe"> </p>
            <p> <input type="text" name="escola" placeholder="Nome da Escola"> </p>
            <p>
                <select name="funcao">
                    <optgroup label="Função">
                        <option value="Aluno"> Aluno </option>
                        <option value="Docente"> Corpo Docente </option>
                        <option value="Voluntário"> Voluntário </option>
                    </optgroup>
                </select>
            </p>
            <p> <input type="text" name="cidade" placeholder="Cidade (Em que está a Instituição Escolar)"> </p>
            <p> <input type="text" name="estado" placeholder="Estado (Em que está a Instituição Escolar)"> </p>

            <p> <input type="reset"> <input type="submit"> </p>
        </form>
    </body>
</html>