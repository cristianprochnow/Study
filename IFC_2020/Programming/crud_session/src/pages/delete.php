<?php session_start();

if(!isset($_SESSION['valid'])) {
  header('Location: login.php');
}
?>
<?php
//incluindo o arquivo de conexão com o BD
include("../services/connection.php");

//getting id of the data from url
//obtendo o ID dos dados a partir da URL
$id = $_GET['id'];

//excluindo a linha da tabela
$result=mysqli_query($mysqli, "DELETE FROM produtos WHERE id=$id");

//redirecionando para a página de exibição (view.php no nosso caso)
header("Location: view.php");
?>
