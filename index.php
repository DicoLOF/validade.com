<?php 
   
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
          <form class="login100-form validate-form flex-sb flex-w" href="php/index.php" >
            <span class="login100-form-title p-b-32"> Logi </span>
            <span class="txt1 p-b-11"> Usuario </span>
            <div class="wrap-input100 validate-input m-b-36" data-validate="Usuario requerido" >
              <input class="input100" type="text" name="username" />
              <span class="focus-input100"></span>
            </div>
            <span class="txt1 p-b-11"> Senha </span>
            <div class="wrap-input100 validate-input m-b-12" data-validate="Senha requerida" >
              <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
              </span>
              <input class="input100" type="password" name="pass" />
              <span class="focus-input100"></span>
            </div>
            <div class="flex-sb-m w-full p-b-48">
              <div>
                <a href="#" class="txt3"> Esqueceu a senha? </a>
              </div>
            </div>
            <div class="container-login100-form-btn">
              <button class="login100-form-btn">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->    
    <script src="assets/js/main.js"></script>
  </body>
</html>
