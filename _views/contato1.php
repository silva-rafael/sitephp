<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <title>Infotecjs</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;">
  <a class="navbar-brand" href="#"><img src="assets/imagens/logo.png" class="rounded-circle" width="100"> Infotecjs</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active" id="active">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>
        <li class="nav-item ">
          <a class="nav-link" href="https://github.com" target="_blank" >Github</a>
        </li>
    </div>
  </nav>
  <!-- Formulario -->
  <div class="container">

    <div class="col" style="text-align: center; margin-top: 200px;">
      
        <h1 class="display-4 ">Nós amamos desenvolver histórias de sucesso!</h1>
        <h3 style="color: #333;">Ao desenvolver seu site participamos do seu crescimento</h3>
      </div>
    <div id="formulario" class="row">
      <div class="col-md-6 ">
        <form class="form-group" action="enviacontato.php" method="post">
          <label>Nome</label>
          <input type="text" name="usuario" class="form-control" placeholder="Nome">
          <label>E-mail</label>
          <input type="email" name="email" class="form-control" placeholder="E-mail">
          <label>Ecreva aqui</label>
          <textarea class="form-control" name="texto"></textarea>
          <button class="btn btn-secondary">Enviar</button>
        </form>
      </div>
      <div class="col">
        <img class="img-fluid" src="assets/imagens/contato.jpg">
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
      <a href="https://wa.me/55329980083600?text=Olá%20como%20podemos%20ajudar?" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
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