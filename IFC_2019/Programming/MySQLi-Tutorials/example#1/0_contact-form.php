<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Contato</title>
    </head>

    <body>
        <h2>Entre em Contato</h2>

        <p>Por favor, preencha este formulário e envie para nós.</p>

        <form action="0_process-form.php"  method="post">
            <p>
                <label for="inputName">Nome:<sup>*</sup></label>
                <input type="text" name="nome" id="inputName">
            </p>

            <p>
                <label for="inputEmail">Email:<sup>*</sup></label>
                <input type="text" name="email" id="inputEmail">
            </p>

            <p> 
                <label for="inputSubject">Assunto:</label>
                <input type="text" name="assunto" id="inputSubject">
            </p>

            <p> 
                <label for="inputComment">Mensagem:<sup>*</sup></label>
                <textarea name="mensagem" id="inputComment" rows="5” cols="30"></textarea>
            </p> 
            
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
        </form>
    </body>
</html>