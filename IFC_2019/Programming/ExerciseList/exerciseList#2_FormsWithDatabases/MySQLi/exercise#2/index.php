<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>2º Exercício</title>
    </head>

    <body>
        <form method="POST" action="process.php" id="form-box">
            <div id="form-title-box">
                <h1 id="form-title">Cadastro</h1>
            </div>

            <div id="main-content">
                <p class="p-items">
                    <label for="username">Nome Completo</label>
                    <input type="text" name="username" id="username" class="input-items" required>
                </p>

                <p class="p-items">
                    <label for="age">Idade</label>
                    <input type="number" name="age" id="age" class="input-items" required>
                </p>
            </div>

            <div id="submit-button-box">
                <input type="reset" class="submit-buttons" id="reset">
                <input type="submit" class="submit-buttons" id="submit">
            </div>
        </form>
    </body>
</html>