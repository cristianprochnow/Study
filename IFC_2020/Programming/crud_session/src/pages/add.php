<?php session_start();

if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<html>
  <head>
    <title>Incluir Dados</title>
  </head>
<body>
<?php
//incluindo o arquivo de conexão com o BD
include_once("../services/connection.php");
if(isset($_POST['Submit'])) {
  $nome = $_POST['nome'];
  $qtde = $_POST['qtde'];
  $preco = $_POST['preco'];
  $loginId = $_SESSION['id'];
  // verificando os campos vazios
  if(empty($nome) || empty($qtde) || empty($preco)) {
    if(empty($nome)) {
      echo "<font color='red'>Campo Nome está vazio.</font><br/>";
    }
    if(empty($qtde)) {
      echo "<font color='red'>Campo Quantidade está vazio.</font><br/>";
    }
    if(empty($preco)) {
      echo "<font color='red'>Campo Preço está vazio.</font><br/>";
    }
    //link para a página anterior
    echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
  } else {
    // se todos os campos estão preenchidos (não vazios)
    //inclui dados no BD (tabela produtos)
    $result = mysqli_query(
      $mysqli,
      "INSERT INTO produtos(nome, qtde, preco, login_id) VALUES('$nome','$qtde','$preco', '$loginId')"
    );

    //mostra mensagem de sucesso
    echo "<font color='green'>Dados inseridos com sucesso.";
    echo "<br/><a href='./view.php'>Ver Resultado</a>";
  }
}
?>
</body>
</html>
