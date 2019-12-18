<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <div class="view-content">
            <table>
                <tr>
                    <td>
                        <b>
                            Código de Cadastro
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Fabricante
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Marca
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Modelo
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Ano de Fabricação
                        </b>
                    </td>

                    <td width="20">
                        &nbsp;
                    </td>

                    <td>
                        <b>
                            Kilometragem
                        </b>
                    </td>
                </tr>

                <?php
                    $host            = 'localhost';
                    $user            = 'root';
                    $password        = '';
                    $name            = 'list1_exercise3';

                    $connection      = mysqli_connect($host, $user, $password, $name) or die("Unable connecting to MySQL Server!");

                    $view            = "SELECT auto_id, fabricante, marca, modelo, ano_fabricacao, quilometragem FROM autos ORDER BY auto_id ASC";

                    $commit          = mysqli_query($connection, $view) or die('Error in the commit processing.');

                        while ($rows = mysqli_fetch_assoc($commit))
                        {
                            $databaseItems[] = $rows;
                        }

                            if ($databaseItems) {
                                foreach ($databaseItems as $item) {
                                    ?>

                                    <tr>
                                        <td>
                                            <?php echo($item["auto_id"]) ?>
                                        </td>

                                        <td width="20">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($item["fabricante"]) ?>
                                        </td>

                                        <td width="20">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($item["marca"]) ?>
                                        </td>

                                        <td width="20">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($item["modelo"]) ?>
                                        </td>

                                        <td width="20">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($item["ano_fabricacao"]) ?>
                                        </td>

                                        <td width="20">
                                            &nbsp;
                                        </td>

                                        <td>
                                            <?php echo($item["quilometragem"]) ?>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            }
                ?>
            </table>
        </div>
    </body>
</html>