<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>
            2º Exercício
        </title>
    </head>

    <body>
        <div id="main-content">
            <div id="main-content-title-box">
                <h1 id="main-content-title">
                    Cadastro Pessoal
                </h1>

                <form method="POST" action="data-process.php" id="form-box">
                    <p class="p-items">
                        <input type="text" name="nome" class="input-items" id="username-input" placeholder="Nome Completo" required>
                    </p>

                    <p class="p-items">
                        <input type="number" name="idade" class="input-items" id="age-input" placeholder="Idade" required>
                    </p>

                    <p class="p-items">
                        <input type="reset" class="submit-buttons" id="reset-button">

                        <input type="submit" class="submit-buttons" id="submit-button">
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>