<html>
<head>
  <title>Registrar</title>
</head>
<body>
  <a href="../index.php">Home</a> <br />
  <?php
  include("./services/connection.php");

  if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($usuario == "" || $senha == "" || $nome == "" || $email == "") {
      echo "Todos os campos devem ser preenchidos. Um ou mais campos estão vazios.";
      echo "<br/>";
      echo "<a href='./pages/register.php'>Voltar</a>";
    } else {
      mysqli_query(
        $mysqli,
        "INSERT INTO login(nome, email, usuario, senha) \
        VALUES('$nome', '$email', '$usuario', md5('$senha'))"
      ) or die("Não pude executar a query insert.");

      echo "Registro efetuado com sucesso";
      echo "<br/>";
      echo "<a href='login.php'>Login</a>";
    }
  } else {
    ?>
    <p><font size="+2">Registrar</font></p>
    <form name="form1" method="post" action="register.php">
      <table width="75%" border="0">
        <tr>
          <td width="10%">Nome Completo</td>
          <td><input type="text" name="nome"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Usuário</td>
          <td><input type="text" name="usuario"></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td><input type="password" name="senha"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" value="Enviar"></td>
        </tr>
      </table>
    </form>
    <?php
  }
  ?>
</body>
</html>
