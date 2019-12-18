<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            1º Exercício
        </title>
    </head>

    <body>
        <div id="main-content">
            <div id="main-content-title">
                <h1>
                    Consulta de Dados
                </h1>
            </div>

            <div id="main-table">
                <table>
                    <tr>
                        <td>
                            <b>
                                Membro
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                E-mail
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Escola
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Estado
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Cidade
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Função
                            </b>
                        </td>

                        <td width="80">
                            &nbsp;
                        </td>

                        <td>
                            <b>
                                Nome da Equipe
                            </b>
                        </td>
                    </tr>

                    <?php
                        $host            = 'localhost';
                        $user            = 'root';
                        $password        = '';
                        $name            = 'list1_exercise1';

                        $connection      = mysqli_connect($host, $user, $password, $name) or die("Error connecting to MySQL Server.");

                        $data_select     = "SELECT nome_membro, email, nome, cidade, estado, funcao, crew.nome_equipe FROM members, school, crew WHERE school.nome = members.escola AND members.nome_equipe = crew.nome_equipe";

                        $data_view       = mysqli_query($connection, $data_select) or die("Error MySQL querying!");

                            while ($rows = mysqli_fetch_assoc($data_view)) 
                            {
                                $total_data_array[] = $rows;
                            }

                                if ($total_data_array) 
                                {
                                    foreach ($total_data_array as $data) 
                                    {
                                        ?>

                                            <tr>
                                                <td>
                                                    <?php echo($data["nome_membro"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["email"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["nome"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["estado"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["cidade"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["funcao"]) ?>
                                                </td>

                                                <td width="80">
                                                    &nbsp;
                                                </td>

                                                <td>
                                                    <?php echo($data["nome_equipe"]) ?>
                                                </td>
                                            </tr>

                                        <?php
                                    }
                                }
                    ?>
                </table>
            </div>
            <div id="registry-box">
                <p>
                    <b>
                        Número de registros
                    </b>
                </p>

                <p>
                    <?php echo mysqli_num_rows($data_view) ?> registros
                </p>

                <a href="index.php">
                    Inserir mais dados
                </a>
            </div>

            <?php
                mysqli_close($connection);
            ?>
        </div>
    </body>
</html>