<?php
require 'conecta.php';

if (isset($_POST['usuario'])) {
  $usuario = $_POST['usuario'];
  $senha = md5($_POST['senha']);

  $verifica_usuario = "SELECT * FROM admin WHERE usuario = '$usuario' AND senha = '$senha'";
  $query = mysqli_query($con, $verifica_usuario);
  
  
  if (!is_null(mysqli_fetch_array($query))) {
    session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    header("Location:restrito.php");
  }

}



?>


<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <title>Hello, world!</title>
</head>
<body>
  <!-- Inicio da navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Infotecjs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Inicio da div container -->
  <div class="container">

    <!-- Formuoario começa aqui -->

    <form action="login.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="usuario" placeholder="Nome">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <!-- Fim do formulario -->

    <!-- Fim da div container -->
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>