<!DOCTYPE HTML>

<html>
    <head>
        <title>PDO – Ler Registros - PHP CRUD Tutorial</title>
        <!-- Latest compiled and minified Bootstrap CSS -->

        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

        <!-- custom css -->
        <style>
            .m-r-1em { margin-right:1em; }
            .m-b-1em { margin-bottom:1em; }
            .m-l-1em { margin-left:1em; }
            .mt0 { margin-top:0; }
        </style>
    </head>

    <body>
        <!-- container -->
        <div class="container">
            <div class="page-header">
                <h1> Ler Produtos </h1>
            </div>

            <!-- PHP code to read records will be here -->
            <?php
                // include database connection
                include 'config/conexao.php';

                // delete message prompt will be here
                $acao = isset($_GET['acao']) ? $_GET['acao'] : "";

                // if it was redirected from delete.php
                if($acao=='deleted')
                {
                echo "<div class='alert alert-success'>Registro excluído.</div>";
                }

                // select all data
                $query = "SELECT id, nome, descricao, preco FROM produtos ORDER BY id DESC";
                $stmt = $con->prepare($query);
                $stmt->execute();

                // this is how to get number of rows returned
                $num = $stmt->rowCount();

                // link to create record form
                echo "<a href='create.php' class='btn btn-primary m-b-1em'>Criar Novo Produto</a>";

                //check if more than 0 record found
                if($num>0)
                {
                    // data from database will be here
                    //start table
                    echo "<table class='table table-hover table-responsive table-bordered'>";

                    //creating our table heading
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>Nome</th>";
                    echo "<th>Descricão</th>";
                    echo "<th>Preço (R$)</th>";
                    echo "<th>Ação</th>";
                    echo "</tr>";

                    // table body will be here
                    // retrieve our table contents
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        // extract row
                        // this will make $row['firstname'] to just $firstname only
                        extract($row);

                        // creating new table row per record
                        echo "<tr>";
                            echo "<td>{$id}</td>";
                            echo "<td>{$nome}</td>";
                            echo "<td>{$descricao}</td>";
                            echo "<td>&#36;{$preco}</td>";
                            echo "<td>";
                                // read one record
                                echo "<a href='read_one.php?id={$id}' class='btn btn-info m-r-1em'> Ler </a>";

                                // we will use this links on next part of this post
                                echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'> Editar </a>";

                                // we will use this links on next part of this post
                                echo "<a href='#' onclick='delete_user({$id});' class='btn btndanger'> Excluir </a>";
                            echo "</td>";
                        echo "</tr>";
                    }

                    // end table
                    echo "</table>";
                }
                // if no records found
                else
                {
                    echo "<div class='alert alert-danger'>Registros não encontrados.</div>";
                }
            ?>
        </div> <!-- end .container -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
        
        <!-- confirm delete record will be here -->
        <script >
            // confirm record deletion
            function delete_user( id )
            {
                var answer = confirm('Você tem certeza?');

                if (answer)
                {
                    // if user clicked ok,
                    // pass the id to delete.php and execute the delete query
                    window.location = 'delete.php?id=' + id;
                }
            }
        </script>
    </body>
</html>