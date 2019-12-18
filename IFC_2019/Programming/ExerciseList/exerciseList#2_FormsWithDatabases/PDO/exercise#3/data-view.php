<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            3º Exercício
        </title>
    </head>

    <body>
        <h1>
            Dados Inseridos
        </h1>

        <?php
            try
            {
                $dbHost   = 'localhost';
                $dbUser   = 'root';
                $dbPasswd = '';
                $dbName   = 'list1_exercise3';

                $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

                $query_text = "SELECT auto_id, fabricante, marca, modelo, ano_fabricacao, quilometragem FROM autos ORDER BY auto_id ASC";

                $query = $connection->query($query_text);

                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $table[] = $row;
                }
                ?>
                
                <table>
                    <tr>
                        <td>
                            <b>
                                Registro
                            </b>
                        </td>

                        <td width="40">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Fabricante
                            </b>
                        </td>

                        <td width="40">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Marca
                            </b>
                        </td>

                        <td width="40">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Modelo
                            </b>
                        </td>

                        <td width="40">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Ano de Fabricação
                            </b>
                        </td>

                        <td width="40">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Quilometragem
                            </b>
                        </td>
                    </tr>

                    <?php
                        if ($table)
                        {
                            foreach ($table as $print)
                            {
                                ?>
                                
                                <tr>
                                    <td>
                                        <?php print($print["auto_id"]) ?>
                                    </td>

                                    <td width="40">
                                        &nbsp;
                                    </td>

                                    <td>
                                        <?php print($print["fabricante"]) ?>
                                    </td>
                                
                                    <td width="40">
                                        &nbsp;
                                    </td>
                               
                                    <td>
                                        <?php print($print["marca"]) ?>
                                    </td>
                                
                                    <td width="40">
                                        &nbsp;
                                    </td>
                              
                                    <td>
                                        <?php print($print["modelo"]) ?>
                                    </td>
                                
                                    <td width="40">
                                        &nbsp;
                                    </td>
                               
                                    <td>
                                        <?php print($print["ano_fabricacao"]) ?>
                                    </td>
                                
                                    <td width="40">
                                        &nbsp;
                                    </td>
                               
                                    <td>
                                        <?php print($print["quilometragem"]) ?>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                    ?>

                </table> <br>

                <?php
                $rowNumber = $query->rowCount();

                print "Número de Registros: " . $rowNumber;

                $connection = NULL;
            }
            catch (PDOException $error)
            {
                echo "Conexão Falhou! Erro: " . $error->getMessage();
            }
        ?>
    </body>
</html>