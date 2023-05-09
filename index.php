<?php
session_start();
if(isset($_SESSION['Usuario'])){
  header('app/clientes/cliente.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/all.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Document</title>
    <style>
      body{
        background-image:url(assets/imagenes/login.png);
        background-size: cover;
        
      }
      #login{
        background-color: black;
        width: 350px;
        height: 425px;
        color: white;
        border-radius: 50px;
      }
      .boton_login{
        border-radius: 8px ;
      }
      @media  (max-width: 415px) {
        #login{
          width: 350px;
          height: 450px;
        }
      }
    </style>
</head>

<body class=" d-flex justify-content-center align-items-center vh-100 mw-100">
  <div id="login" class=" d-flex p-2 flex-column container justify-content-center align-items-center ">
    <div  class="d-flex justify-content-center bg-light mt-3">
      <img src="assets/imagenes/iconologin.svg" alt="login-icon" style="height: 7rem;"/>
    </div>

    <div class="d-flex justify-content-center">Login</div>
      <div class="d-flex justify-content-center d-sm-inline-flex p-2">
          <form method="post" action="app/clientes/validadUsuario.php">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre de usuario</label>
              <input type="text"  id="usuario" class="form-control" name="usuario" autocomplete="off">   
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <div class="input-group mb-1">
                <input type="password" id="contrasena"class="form-control" name="contrasena" autocomplete="off" >
                <div class="input-group-append">
                  <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                </div>
              </div>
            </div>
            <div class="mb-7 py-2 justify-content-center">
              <button type="submit" class="btn btn-primary " name="botonlogin">INICIAR SESION</button>
            </div>
          </form>
      </div>
  </div>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    function mostrarPassword(){
        var cambio = document.getElementById("contrasena");
        if(cambio.type == "password"){
            cambio.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

