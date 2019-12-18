<?php
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"])))
    {
        // Include config file
        require_once "config.php";

        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = :id";

        if ($stmt = $pdo->prepare($sql))
        {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);

            // Set parameters
            $param_id = trim($_GET["id"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute())
            {
                if ($stmt->rowCount() == 1)
                {
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    // Retrieve individual field value
                    $name    = $row["nome"];
                    $address = $row["endereco"];
                    $salary  = $row["salario"];
                }
                else
                {
                    // URL doesn't contain valid id parameter. Redirect to error page
                    header("location: error.php");

                    exit();
                }
            } else{
            echo "Oops! Algo deu errado. Tente mais tarde.";
            }
        }
        // Close statement
        unset($stmt);

        // Close connection
        unset($pdo);
    } 
    else
    {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");

        exit();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Visualizar Registro </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

        <style>
            .wrapper{
                width: 500px;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1> View Record </h1>
                        </div>

                        <div class="form-group">
                            <label> Nome </label>
                            <p class="form-control-static"><?php echo $row["nome"]; ?></p>
                        </div>

                        <div class="form-group">
                            <label> Endereço </label>
                            <p class="form-control-static"><?php echo $row["endereco"]; ?></p>
                        </div>

                        <div class="form-group">
                            <label>Salário</label>
                            <p class="form-control-static"><?php echo $row["salario"]; ?></p>
                        </div>
                        
                        <p><a href="index.php" class="btn btn-primary">Voltar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>