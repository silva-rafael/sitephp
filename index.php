<?php require_once '_views/conecta.php';

$seleciona_post   = "SELECT * FROM posts";
$query           = mysqli_query($con, $seleciona_post);
$post            = mysqli_fetch_assoc($query);


?>

<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="_css/style.css">

  <title>Infotecjs</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;" >
    <a class="navbar-brand" href="./"><img src="_images/logo.png" class="rounded-circle" width="100"> Infotecjs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active" id="active">
          <a class="nav-link" href="./">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="_views/contato.php">Contato</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="_blog/">Blog</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="_views/login.php">Login</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://github.com/38rafael" target="_blank" >Github</a>
        </li>
      </div>
    </nav>
    <section>
      <div class="banner">
        <div class="texto">
          <h1 class="display-1">Infotecjs</h1>
          <h1 class="display-5">Você precisa de um site.<br>Entre em contato</h1>
          <a href="https://wa.me/5532998083600">
            <button type="button" class="btn btn-success">Whatapp</button>
          </a>
        </div>
      </div>
    </section>
    <!-- texto de teste para ser mudado -->
    <div id="primeira-linha" >
    <div class="container">
      <div  class="row">
        <div id="primeira-linha-texto" class="col-md-6">
          <h1 class="display-4">Exemplo de Códigos</h1>
          <p>Confira nossos codigos no GitHub.</p>
          <a href="https://github.com/38rafael" target="_blank">
            <button type="button" class="btn btn-secondary">Github</button>
          </a>
        </div>
        <div id="primeira-linha-imagem" class="col-md-6">
          <img class="img-fluid" src="_images/codigo.jpg">
        </div>
      </div>
    </div>
  </div>
    <!-- Footer -->
    <div id="footer-linha">
      <div class="container">
        <div class="row">
          <div id="footer-coluna" class="col-lg">
            <p> Trabalhando para crescer todos os dias &copyInfotecjs <?php echo date('Y/m/d'); ?></div>
        </div>
      </div>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://wa.me/5532998083600" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
      z-index:1000;" target="_blank">
      <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>