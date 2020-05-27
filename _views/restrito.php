<?php require_once 'conecta.php'; 
session_start();
if (!$_SESSION['usuario']) {
  header("Location:login.php");
}

if (isset($_POST['post'])) {
  $titulo = $_POST['titulo'];
  $post   = $_POST['post'];
  $insere_post  = "UPDATE posts SET titulo = '$titulo', post = '$post' WHERE postId=1";
  $query  = mysqli_query($con, $insere_post);
}else{
  echo "erro ao inserir no banco.";
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

  <title>Área restrita infotecjs</title>
</head>
<body>
  <!-- Inicio da navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="logout.php">Infotecjs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Sair</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Inicio da div container -->
  <div class="container">

    <!-- Formuoario começa aqui -->

    <form class="form-group" action="restrito.php" method="post">
      <label for="formGroupExampleInput">Título</label>
      <input class="form-control" type="text" name="titulo" placeholder="Titulo">
      <label for="formGroupExampleInput">Texto</label>
      <textarea class="form-control" name="post" placeholder="Escreva sua postagem aqui." style="min-height: 200px;"></textarea>
      <button class="btn btn-primary" style="margin-top: 30px;">Enviar</button>
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