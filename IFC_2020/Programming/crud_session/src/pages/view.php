<?php session_start();

if (!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
//incluindo o arquivo de conexão com o BD
include_once("../services/connection.php");
//Buscando os dados em ordem decrescente (última entrada primeiro)
$result = mysqli_query($mysqli, "SELECT * FROM produtos WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>
<html>
<head>
  <title>Homepage</title>
</head>
<body>
  <a href="../index.php">Home</a> | <a href="./add.html">Incluir Novos Dados</a> |
  <a href="./logout.php">Logout</a>
  <br/><br/>
  <table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
      <td>Nome</td>
      <td>Quantidade</td>
      <td>Preço (R$)</td>
      <td>Atualizar</td>
    </tr>
    <?php
    while($res = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>".$res['nome']."</td>";
        echo "<td>".$res['qtde']."</td>";
        echo "<td>".$res['preco']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Você tem certeza que quer excluir?')\">Excluir</a></td>";
      }
      ?>
    </table>
  </body>
  </html>
