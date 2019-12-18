<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8" />
        <title>4º Exercício</title>
    </head>

    <body>
        <div class="main-content">
            <div class="form-box">
                <form method="POST" action="process.php">
                    <p>
                        <input type="text" name="nomeBebida" placeholder="Nome da bebida" />
                        <input type="number" name="caloriasBebida" placeholder="Calorias (Kcal)" />
                    </p>
                    
                    <p>Se for café, insira a porcentagem de cafeína: <input type="number" name="porcentagemCafe" placeholder="Porcentagem de cafeína" /> </p>

                    <br />

                    <p>
                        <input type="reset" name="reset" value="Apagar tudo" />
                        <input type="submit" name="submit" value="Enviar formulário" />
                    </p>
                </form>
            </div>
        </div>
    </body>
</html>