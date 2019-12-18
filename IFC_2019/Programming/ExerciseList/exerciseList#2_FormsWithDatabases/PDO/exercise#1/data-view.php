<!DOCTYPE html>

<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title> 1º Exercício </title>
    </head>

    <body>
        <h1> Dados Inseridos </h1>

        <?php
            try
            {
                $dbHost   = 'localhost';
                $dbUser   = 'root';
                $dbPasswd = '';
                $dbName   = 'list1_exercise1';

                $connection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPasswd);

                $query_text = "SELECT members.email, members.nome_membro, members.numero, members.funcao, school.nome, school.cidade, school.estado, crew.nome_equipe FROM members, school, crew WHERE school.nome = members.escola AND members.nome_equipe = crew.nome_equipe ORDER BY members.nome_membro ASC";

                $query = $connection->query($query_text);

                while ($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $table[] = $row;
                }

                ?>
                
                <table>
                    <tr>
                        <td> <b> Nome do Membro </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Email </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Número do Membro </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Função do Membro </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Escola </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Cidade da Escola </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Estado da Escola </b> </td>
                        <td width="20"> &nbsp; </td>
                        <td> <b> Nome da Equipe </b> </td>
                    </tr>

                    <?php
                        if ($table)
                        {
                            foreach ($table as $print)
                            {
                                ?>
                                
                                <tr>
                                    <td> <?php print($print["nome_membro"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["email"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["numero"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["funcao"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["nome"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["cidade"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["estado"]); ?> </td>
                                    <td width="20"> &nbsp; </td>
                                    <td> <?php print($print["nome_equipe"]); ?> </td>
                                </tr>

                                <?php
                            }
                        }
                    ?>

                </table> <br>

                <?php
                $row_number = $query->rowCount();

                print "Número de registros: " . $row_number;

                $connection = NULL;

            }
            catch (PDOException $error)
            {
                print "Conexão Falhou! Erro: " . $error->getMessage();
            }
        ?>
    </body>
</html>