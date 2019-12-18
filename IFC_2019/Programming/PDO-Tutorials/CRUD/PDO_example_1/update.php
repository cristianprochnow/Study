<!DOCTYPE HTML>

<html>
    <head>
        <title> PDO - Update a Record - PHP CRUD Tutorial </title>

        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>

    <body>
        <!-- container -->
        <div class="container">
            <div class="page-header">
                <h1> Atualizar Produto </h1>
            </div>

            <!-- PHP read record by ID will be here -->
            <?php
                // get passed parameter value, in this case, the record ID
                // isset() is a PHP function used to verify if a value is there or not
                $id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

                //include database connection
                include 'config/conexao.php';

                // read current record's data
                try 
                {
                    // prepare select query
                    $query = "SELECT id, nome, descricao, preco FROM produtos WHERE id = ? LIMIT 0,1";
                    $stmt = $con->prepare( $query );
                    
                    // this is the first question mark
                    $stmt->bindParam(1, $id);

                    // execute our query
                    $stmt->execute();

                    // store retrieved row to a variable
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    // values to fill up our form
                    $nome = $row['nome'];
                    $descricao = $row['descricao'];
                    $preco = $row['preco'];
                }
                // show error
                catch (PDOException $exception)
                {
                    die('ERROR: ' . $exception->getMessage());
                }
            ?>

            <!-- PHP post to update record will be here -->
            <?php
                // check if form was submitted
                if($_POST)
                {
                    try
                    {
                        // write update query
                        // in this case, it seemed like we have so many fields to pass and
                        // it is better to label them and not use question marks
                        $query = "UPDATE produtos SET nome=:nome, descricao=:descricao, preco=:preco WHERE id = :id";

                        // prepare query for execution
                        $stmt = $con->prepare($query);

                        // posted values
                        $nome = htmlspecialchars(strip_tags($_POST['nome']));
                        $descricao = htmlspecialchars(strip_tags($_POST['descricao']));
                        $preco = htmlspecialchars(strip_tags($_POST['preco']));

                        // bind the parameters
                        $stmt->bindParam(':nome', $nome);
                        $stmt->bindParam(':descricao', $descricao);
                        $stmt->bindParam(':preco', $preco);
                        $stmt->bindParam(':id', $id);

                        // Execute the query
                        if ($stmt->execute())
                        {
                            echo "<div class='alert alert-success'>Registro Atualizado.</div>";
                        }
                        else
                        {
                            echo "<div class='alert alert-danger'>Não foi possível atualizar o registro. Tente novamente.</div>";
                        }
                    }
                    // show errors
                    catch (PDOException $exception)
                    {
                        die('ERROR: ' . $exception->getMessage());
                    }
                }
            ?>

            <!-- HTML form to update record will be here -->
            <!--we have our html form here where new record information can be updated-->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
                <table class='table table-hover table-responsive table-bordered'>
                    <tr>
                        <td> Nome </td>
                        <td> <input type='text' name='nome' value="<?php echo htmlspecialchars($nome, ENT_QUOTES); ?>" class='form-control' /> </td>
                    </tr>

                    <tr>
                        <td> Descrição </td>
                        <td> <textarea name='descricao' class='form-control'><?php echo
                        htmlspecialchars($descricao, ENT_QUOTES); ?> </textarea> </td>
                    </tr>

                    <tr>
                        <td> Preço </td>
                        <td> <input type='text' name='preco' value="<?php echo htmlspecialchars($preco, ENT_QUOTES); ?>" class='form-control' /> </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td> <input type='submit' value='Salvar Alterações' class='btn btnprimary'/> <a href='index.php' class='btn btn-danger'>Voltar ler produtos</a> </td>
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