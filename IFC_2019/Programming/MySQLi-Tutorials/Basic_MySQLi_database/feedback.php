<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de Feedback</title>
    </head>

    <body>
        <form action="process_form.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><h2>Por favor, dê o seu feedback</h2></td>
                </tr>

                <tr>
                    <td><p><strong>Primeiro Nome:</strong></p></td>
                    <td><input type="text" name="first_name" size="30" maxlength="30" /></td>
                </tr>

                <tr>
                    <td><p><strong>Último Nome:</strong></p></td>
                    <td><input type="text" name="last_name" size="30" /></td>
                </tr>

                <tr>
                    <td><p><strong>Email:</strong></p></td>
                    <td><input type="text" name="email" size="40"/></td>
                </tr>

                <tr>
                    <td><p><strong>Comentários:</strong></p></td>
                    <td><textarea name="comments" rows="7" cols="48"></textarea></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Enviar" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>