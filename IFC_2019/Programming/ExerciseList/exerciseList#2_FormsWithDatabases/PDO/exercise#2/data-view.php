<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title> 2º Exercício </title>
    </head>

    <body>
        <h1> Dados Inseridos </h1>

        <?php
            try
            {
                $dbHost   = 'localhost';
                $dbUser   = 'root';
                $dbPasswd = '';
                $dbName   = 'list1_exercise2';

                $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

                $query_text = "SELECT testeID, nome, idade FROM teste1 ORDER BY testeID ASC";

                $query = $connection->query($query_text);

                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $table[] = $row;
                }
                ?>
                
                <table>
                    <tr>
                        <td> <b> Registro </b> </td>
                        <td width="40"> &nbsp; </td>
                        <td> <b> Nome </b> </td>
                        <td width="40"> &nbsp; </td>
                        <td> <b> Idade </b> </td>
                    </tr>

                <?php
                    if ($table)
                    {
                        foreach ($table as $print)
                        {
                            ?>
                            
                            <tr>
                                <td> <?php print($print["testeID"]); ?> </td>
                                <td width="40"> &nbsp; </td>
                                <td> <?php print($print["nome"]); ?> </td>
                                <td width="40"> &nbsp; </td>
                                <td> <?php print($print["idade"]); ?> </td>
                            </tr>
                            
                            <?php
                        }
                    }
                ?>

                </table> <br>

                <?php
                $row_number = $query->rowCount();

                print "Número de Registros: " . $row_number;

                $connection = NULL;
            }
            catch (PDOException $error)
            {
                print "Conexão Falhou! Erro: " . $error->getMessage();
            }
        ?>

    </body>
</html>