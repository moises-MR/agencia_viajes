<?php
session_start();

if ( isset($_SESSION['cliente']) ) {
  header("Location:index.php");
}
  // $cliente = $_SESSION['cliente'];
  // $autenticado = $_SESSION["login"];


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

  <h2 class="h2Registro">Login</h2>
  <form method="POST">
    
    <div class="user-box">
      <input type="mail" name="correoEValidado" required id="correoInput">
      <label>Correo Electronico</label>
    </div>
    <div class="user-box">
      <input type="password" name="passwordValidado" required id="contraInput">
      <label>Contraseña</label>
    </div>
   


    <button name="btn-validar" id="btn-registrarme">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Iniciar Sesion
  </button>
  </form>
</div>
<img src="img/nuevo.gif" alt="" class="gif-beach">
<!-- <video class="vid-playa-movil" src="img/playa.mp4" autoplay loop muted></video> -->
<video class="vid-playa-desktop" src="img/playacompleto.mp4" autoplay loop muted></video>
 </div>

</div>

</body>

<script>


  
console.log("<?php echo $cliente?>");



</script>
<script src="js/login.js"></script>
<script type="text/javascript" src="js/barba.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</html>

<?php


require "php/app.php";



?>