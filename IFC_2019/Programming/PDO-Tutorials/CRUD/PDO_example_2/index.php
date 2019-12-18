<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
        <title> Dashboard </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        
        <style type="text/css">
            .wrapper{
                width: 650px;
                margin: 0 auto;
            }
            
            .page-header h2{
                margin-top: 0;
            }

            table tr td:last-child a{
                margin-right: 15px;
            }
        </style>

        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </head>

    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left"> Detalhes dos Empregados </h2>

                            <a href="create.php" class="btn btn-success pull-right">Incluir Novo Empregado</a>
                        </div>

                        <?php
                            // Include config file
                            require_once "config.php";

                            // Attempt select query execution
                            $sql = "SELECT * FROM employees";

                            if ($result = $pdo->query($sql))
                            {
                                if($result->rowCount() > 0)
                                {
                                    echo "<table class='table table-bordered table-striped'>";
                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th>#</th>";
                                                echo "<th>Nome</th>";
                                                echo "<th>Endereço</th>";
                                                echo "<th>Salário</th>";
                                                echo "<th>Ação</th>";
                                            echo "</tr>";
                                        echo "</thead>";

                                        echo "<tbody>";

                                            while ($row = $result->fetch())
                                            {
                                                echo "<tr>";
                                                    echo "<td>" . $row['id'] . "</td>";
                                                    echo "<td>" . $row['nome'] . "</td>";
                                                    echo "<td>" . $row['endereco'] . "</td>";
                                                    echo "<td>" . $row['salario'] . "</td>";
                                                    echo "<td>";
                                                        echo "<a href='read.php?id=". $row['id'] ."'title='Visualizar Registro' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                        echo "<a href='update.php?id=". $row['id'] ."'title='Atualizar Registro' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                                        echo "<a href='delete.php?id=". $row['id'] ."'title='Excluir Registro' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                                    echo "</td>";
                                                echo "</tr>";
                                            }
                                        echo "</tbody>";
                                    echo "</table>";

                                    // Free result set
                                    unset($result);
                                }
                                else
                                {
                                    echo "<p class='lead'><em>Não existem registros.</em></p>";
                                }
                            }
                            else
                            {
                                echo "ERROR: Não pode executar o comando $sql. " . $mysqli->error;
                            }
                            
                            // Close connection
                            unset($pdo);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>