<?php session_start(); ?>
<html>
<head>
  <title>Homepage</title>
  <link href="assets/styles/home.css" rel="stylesheet">
</head>
<body>
  <div id="header">
    Bem-vindo à minha HomePage!
  </div>
  <?php
    if(isset($_SESSION['valid'])) {
      include("./services/connection.php");

      $result = mysqli_query($mysqli, "SELECT * FROM login");
  ?>
    Bem-vindo <?php echo $_SESSION['nome'] ?> ! <a href='./pages/logout.php'>Logout</a>
    <br/><br/>
    <a href='./pages/view.php'>Ver e Incluir Produtos</a>
    <br/><br/>

  <?php
    } else {
      echo "Você deve estar logado para ver esta página.<br/><br/>";
      echo "<a href='./pages/login.php'>Login</a> | <a href='./pages/register.php'>Registrar</a>";
    }
  ?>

  <div id="footer">
    <p>Obrigado Mukesh Chapagain</p>
  </div>
</body>
</html>
