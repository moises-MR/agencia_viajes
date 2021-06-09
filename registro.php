<?php
session_start();

require "php/app.php";

if ( isset($_SESSION['cliente']) ) {
  header("Location:index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/registro.css">

  <title>Mundo Travel Registro</title>
</head>
<body data-barba="wrapper" >
	<div data-barba="container" data-barba-namespace="home">


  
 <div class="div-inputs">
   
 <div class="login-box">
  <h2 class="h2Registro">Regitro Mundo Travel</h2>
  <form method="POST">
    
    <div class="user-box">
      <input type="text" name="nombre" required id="nombreInput">
      <label>Nombre</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellidoPat" required id="apellidoPatInput">
      <label>Apellido Paterno</label>
    </div>
    <div class="user-box">
      <input type="text" name="apellidoMat" required id="apellidoMatInput">
      <label>Apellido Materno</label>
    </div>
    <div class="user-box">
      <input type="tel" name="celular" required id="celularInput">
      <label>Telefono Celular</label>
    </div>
    <div class="user-box">
      <input type="email" name="correoE" required id="correoInput">
      <label>Correo Electronico</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required id="contraInput">
      <label>Contraseña</label>
    </div>
    <div class="user-box">
      <input type="password" name="passwordConfirm" required id="contraInputConfirmar">
      <label>Confirmar Contraseña</label>
    </div>


    <button name="btn-registro" id="btn-registrarme">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Registrarme
  </button>
  </form>
</div>
<img src="img/nuevo.gif" alt="" class="gif-beach">
<!-- <video class="vid-playa-movil" src="img/playa.mp4" autoplay loop muted></video> -->
<video class="vid-playa-desktop" src="img/playacompleto.mp4" autoplay loop muted></video>
 </div>

</div>

</body>
<script src="js/login.js"></script>
<script type="text/javascript" src="js/barba.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</html>

