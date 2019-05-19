<?php
  @session_destroy();
  session_start();
  require "config/config.php";
  //print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NB Telecom - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<style>
  .centered{
    position:absolute;
    left: 50%;
    margin-left:-200px;
    width: 400px;
    margin-top: 2%;
    box-shadow: 1px 1px  10px #000;
  }
</style>

<body>

  <div class="container">

    <div class="card centered" >
      <img class="card-img-top" src="img/logo-nb.png" alt="Card image cap" >
      <div class="card-body">
        <h5 class="card-title text-center text-uppercase">Painel de Administrativo</h5>
        <hr>
        <form class="mt-4" action="controller/login_controller.php" method="POST">
          
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Digite seu login" name="login" >
          </div>
          
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Digite sua senha" name="senha">
          </div>

          <div class="form-group">
            <?php 
              if(isset($_SESSION[DANGER][UNAUTHORIZED])){
              ?>
              <div class="alert alert-danger" role="alert"><?php echo $_SESSION[DANGER][UNAUTHORIZED][NULL];?></div>
            <?php } ?>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-outline-secondary btn-lg btn-block">Entrar</button>
          </div>

        </form>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>