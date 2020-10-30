<?php session_start(); ?>

<html>
<head>
  <title>Login</title>
</head>
<body>
  <a href="../index.php">Home</a> <br />
  <?php
  include("../services/connection.php");
  if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['usuario']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['senha']);

    if($user == "" || $pass == "") {
      echo "Campo Usuário ou Senha vazios.";
      echo "<br/>";
      echo "<a href='login.php'>Voltar</a>";
    } else {
      $result = mysqli_query(
        $mysqli, "SELECT * FROM login WHERE usuario='$user' AND senha=md5('$pass')"
      ) or die("Não pude executar a Query SQL.");

      $row = mysqli_fetch_assoc($result);

      if (is_array($row) && !empty($row)) {
        $validuser = $row['usuario'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['id'] = $row['id'];
      } else {
        echo "Usuário ou Senha inválidos.";
        echo "<br/>";
        echo "<a href='login.php'>Voltar</a>";
      }

      if (isset($_SESSION['valid'])) {
        header('Location: index.php');
      }
    }
  } else {
    ?>
    <p><font size="+2">Login</font></p>
    <form name="form1" method="post" action="login.php">
      <table width="75%" border="0">
        <tr>
          <td width="10%">Usuário</td>
          <td><input type="text" name="usuario"></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td><input type="password" name="senha"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit"

            value="Enviar"></td>
          </tr>
        </table>
      </form>
      <?php
  }
    ?>
  </body>
  </html>
