<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Contato</title>
    </head>

    <body>
        <h1>Obrigado</h1>

        <p>Aqui está a informação que você submeteu:</p>

        <ol>
            <li><em>Nome:</em> <?php echo $_POST["nome"]?></li>
            <li><em>Email:</em> <?php echo $_POST["email"]?></li>
            <li><em>Assunto:</em> <?php echo $_POST["assunto"]?></li>
            <li><em>Mensagem:</em> <?php echo $_POST["mensagem"]?></li>
        </ol>
    </body>
</html>