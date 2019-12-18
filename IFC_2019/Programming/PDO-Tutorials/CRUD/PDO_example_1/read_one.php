<!DOCTYPE HTML>

<html>
    <head>
        <title> PDO - Read One Record - PHP CRUD Tutorial </title>

        <!-- Latest compiled and minified Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>

    <body>
        <!-- container -->
        <div class="container">
            <div class="page-header">
                <h1> Ler Produto </h1>
            </div>

            <!-- PHP read one record will be here -->
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
                $nome      = $row['nome'];
                $descricao = $row['descricao'];
                $preco     = $row['preco'];
                }
                // show error
                catch(PDOException $exception)
                {
                    die('ERROR: ' . $exception->getMessage());
                }
            ?>

            <!-- HTML read one record table will be here -->
            <!--we have our html table here where the record will be displayed-->
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td> Nome </td>
                    <td> <?php echo htmlspecialchars($nome, ENT_QUOTES); ?> </td>
                </tr>

                <tr>
                    <td> Descrição </td>
                    <td> <?php echo htmlspecialchars($descricao, ENT_QUOTES); ?> </td>
                </tr>

                <tr>
                    <td> Preço </td>
                    <td> <?php echo htmlspecialchars($preco, ENT_QUOTES); ?> </td>
                </tr>

                <tr>
                    <td> </td>
                    <td> <a href='index.php' class='btn btn-danger'>Voltar a ler produtos</a> </td>
                </tr>
            </table>
        </div> <!-- end .container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
    </body>
</html>