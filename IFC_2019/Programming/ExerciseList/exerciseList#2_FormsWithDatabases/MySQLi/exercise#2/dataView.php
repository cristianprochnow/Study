<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>2º Exercício</title>
    </head>

    <body>
        <h1>
            Dados Inseridos
        </h1>
   
        <?php
            // MySQL connection
            $dbHost     = 'localhost';
            $dbUser     = 'root';
            $dbPassword = '';
            $dbName     = 'list1_exercise2';

            $connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName) or die('Unable to connect MySQL Server.');

            // MySQL data inserting
            $insert     = "SELECT testeID, nome, idade FROM teste1 ORDER BY nome ASC";

            // Data commit
            $commit     = mysqli_query($connection, $insert) or die('Error in the commit processing.'); 

            // Data selecting
            while ($item = mysqli_fetch_assoc($commit)) {
                $dataViews[] = $item;
            }
        ?>

        <table>
            <tr>
                <td>
                    <b>Código do Usuário</b>
                </td>

                <td width="20">
                    &nbsp;
                </td>

                <td>
                    <b>Nome Completo</b>
                </td>
                
                <td width="20">
                    &nbsp;
                </td>
                
                <td>
                    <b>Idade</b>
                </td>
            </tr>

            <?php 
                // Empty verifying
                if ($dataViews) {
                    foreach ($dataViews as $dataViewsItem) {
                        ?>

                            <tr>
                                <td>
                                    <?php echo($dataViewsItem["testeID"]) ?>
                                </td>
                                
                                <td width="20">
                                    &nbsp;
                                </td>
                            
                                <td>
                                    <?php echo($dataViewsItem["nome"]) ?>
                                </td>

                                <td width="50">
                                    &nbsp;
                                </td>

                                <td>
                                    <?php echo($dataViewsItem["idade"]) ?>
                                </td>
                            </tr>

                        <?php
                    }
                }
            ?>
        </table>

        <p>
            Número de Registros: <?php echo (mysqli_num_rows($commit)); ?>
        </p>

        <?php mysqli_close($connection) ?>
    </body>
</html>