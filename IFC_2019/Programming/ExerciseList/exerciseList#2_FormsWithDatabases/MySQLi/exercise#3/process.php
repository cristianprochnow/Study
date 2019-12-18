<?php 
    $host            = 'localhost';
    $user            = 'root';
    $password        = '';
    $name            = 'list1_exercise3';

    $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");

    $manufacturer    = $_POST['manufacturer']; // fabricante
    $brand           = $_POST['brand']; // marca do carro
    $model           = $_POST['model']; // modelo do carro
    $manufactureYear = $_POST['manufacture-year']; // ano de fabricação
    $mileage         = $_POST['mileage']; // kilometragem

    $insert          = "INSERT INTO autos(fabricante, marca, modelo, ano_fabricacao, quilometragem) VALUES ('$manufacturer', '$brand', '$model', '$manufactureYear', '$mileage')";

    $commit          = mysqli_query($connection, $insert) or die("Error commiting!");
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <div class="secondary-content">
            <div class="secondary-content-title">
                <h1>
                    Sucesso!
                </h1>
            </div>

            <div class="content">
                <p>
                    Cadastro realizado de forma bem sucedida.
                </p>
            </div>

            <div class="back-links">
                <p>
                    <a href="index.php" class="back-links" id="home-back-links">
                        Cadastrar outro veículo
                    </a>

                    <a href="dataView.php" class="back-links" id="dataview-back-link">
                        Ver os dados já inseridos
                    </a>
                </p>
            </div>
        </div>
    </body>
</html>