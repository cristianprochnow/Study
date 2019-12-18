<!DOCTYPE HTML>

<html>
    <head>
        <title> PDO - Create a Record - PHP CRUD Tutorial </title>
        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>

    <body>
        <!-- container -->
        <div class="container">
            <div class="page-header">
                <h1> Criar Produto </h1>
            </div>

            <!-- PHP insert code will be here -->
            <?php
                if($_POST)
                {
                    // include da conexao com o BD
                    include 'config/conexao.php';

                    try
                    {
                        // insert query
                        $query = "INSERT INTO produtos SET nome=:nome, descricao=:descricao, preco=:preco, data_criacao=:data_criacao";

                        // prepare query for execution
                        $stmt = $con->prepare($query);

                        // posted values
                        $nome      = htmlspecialchars(strip_tags($_POST['nome']));
                        $descricao = htmlspecialchars(strip_tags($_POST['descricao']));
                        $preco     = htmlspecialchars(strip_tags($_POST['preco']));

                        // bind the parameters
                        $stmt->bindParam(':nome', $nome);
                        $stmt->bindParam(':descricao', $descricao);
                        $stmt->bindParam(':preco', $preco);

                        // specify when this record was inserted to the database
                        $data_criacao = date('Y-m-d H:i:s');
                        $stmt->bindParam(':data_criacao', $data_criacao);

                        // Execute the query
                        if($stmt->execute())
                        {
                            echo "<div class='alert alert-success'>Registro foi salvo.</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Não foi possível salvar o registro.</div>";
                        }
                    }
                    // show error
                    catch(PDOException $exception)
                    {
                        die('ERROR: ' . $exception->getMessage());
                    }
                }
            ?>

            <!-- html form here where the product information will be entered -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr> 
                        <td> Nome </td>
                        <td> <input type='text' name='nome' class='form-control' /> </td>
                    </tr>

                    <tr>
                        <td> Descrição </td>
                        <td> <textarea name='descricao' class='form-control'> </textarea></td>
                    </tr>

                    <tr>
                        <td> Preço </td>
                        <td> <input type='text' name='preco' class='form-control' /> </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> <input type='submit' value='Incluir' class='btn btn-primary' /> <a href='index.php' class='btn btn-danger'>Voltar ler produtos</a> </td>
                    </tr>
                </table>
            </form>
        </div> <!-- end .container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
    </body>
</html>