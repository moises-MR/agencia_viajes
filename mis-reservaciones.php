
<?php
session_start();
ob_start();


$idReservacion = $_SESSION["idReservaciones"];
$cliente = $_SESSION['cliente'];
require "php/app.php";
 
if(empty($cliente)){
  header("location:index.php");
}



$sql = "SELECT * FROM reservaciones WHERE idReservaciones = '$idReservacion'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();     

$sql2 = "SELECT * FROM clientes WHERE idUsuario = '$cliente'";
$resultado2 = $conn->query($sql2);
$row2 = $resultado2->fetch_assoc(); 



$sql3 = "SELECT * FROM metodopago WHERE idUsuario = '$cliente'";
$resultado3 = $conn->query($sql3);
$row3 = $resultado3->fetch_assoc(); 

// status y tarjeta 
$metodoStatus = $row3["statusPago"];
$tarjetaCompleta = $row3["tarjeta"];

// variables cliente

$nameHotel = "$row[nombreHotel]";
$namePerson = "$row2[nombre]";
$lastName = $row2["apellidoPaterno"];
$lastName2 = $row2["apellidoMaterno"];
$correoElectronico = $row2["correoE"];
$numeroCelular = $row2["celular"];
$cantidadPersonas = $row["personas"];
$llegada = $row["llegada"];
$salida = $row["salida"];
$ninos = $row["ninos"];
$numDias = $row["numeroDias"];
$totalPrice = $row["precioTotal"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/destinos.css">
  <link rel="stylesheet" href="css/index.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  

  <title>Mis Reservaciones</title>
</head>
<body >



        <div class="logo">
            <img class="logo-img" src="img/icons/Logo-WorldTravel-02.png" alt="">
        </div>

        <div class="icons-general">

         <a href="">   
        <div class="img-icons-text">
        <img class="icon" src="img/icons/iconoavion.png" alt="">
        <h2 class="text-icon">Vuelos</h2>
        </div>
        </a>

        <a href="">
        <div class="img-icons-text">
        <img class="icon" src="img/icons/iconohotel.png" alt="">
        <h2 class="text-icon">Hoteles</h2>
        </div>
        </a>

        <a href="">
        <div class="img-icons-text">
        <img class="icon" src="img/icons/iconotour.png" alt="">
        <h2 class="text-icon">Tours</h2>
        </div>
        </a>

        </div>
 




    
<script>
  let statusPago = "<?php echo $metodoStatus?>";
  let prueba = "<?php echo $nameHotel?>";
  console.log(prueba);
</script>
 

<template id="template-alert">


  <h2 class="alert alert-info title-alerta-sin-resrva">Sin reservaciones !!</h2>

<div class="reservacion">

<img src="https://media.staticontent.com/media/pictures/690123c9-6fa5-4ccb-a680-66aaf0877739/509x182" alt="">




</div>





</template>






<!-- Modal -->

<form class="form-metodo-pago" method="POST" >

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" ">
    <div class="modal-content">
      <div class="modal-header">
        <h2 style="font-size: 2rem;" class="modal-title" id="staticBackdropLabel">Reservaciones</h2>
        <button style="font-size: 2rem;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

   

<div class="form-check" id="checkDebit">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
  <label class="form-check-label" >
    Tarjeta de debito
  </label>
</div>


<div class="debito" id="debito">

<input type="text" placeholder="Nombre titular" name="inputNombre">
<input type="tel" placeholder="16 Digitos de la tarjeta" name="inputCard">
<input type="tel" placeholder="Fecha vencimiento" name="inputVencimiento">
<input type="tel" placeholder="CVV" name="inputCvv">
<input type="text" placeholder="Calle" name="inputCalle">
<input type="tel" placeholder="Numero" name="inputNumero">
<input type="text" placeholder="Colonia" name="inputColonia">
<input type="text" placeholder="Municipio" name="inputMunicipio">
<input type="text" placeholder="Estado" name="inputEstado">
<input type="tel" placeholder="C P" name="inputCp">

</div>






<div class="form-check" id="checkCredit">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
  <label class="form-check-label" >
  Tarjeta de credito
  </label>
</div>


<div class="debito" id="credito">

<input type="text" placeholder="Nombre titular" name="inputNombre2">
<input type="tel" placeholder="16 Digitos de la tarjeta" name="inputCard2">
<input type="tel" placeholder="Fecha vencimiento" name="inputVencimiento2">
<input type="tel" placeholder="CVV" name="inputCvv2">
<input type="text" placeholder="Calle" name="inputCalle2">
<input type="tel" placeholder="Numero" name="inputNumero2">
<input type="text" placeholder="Colonia" name="inputColonia2">
<input type="text" placeholder="Municipio" name="inputMunicipio2">
<input type="text" placeholder="Estado" name="inputEstado2">
<input type="tel" placeholder="C P" name="inputCp2">

</div>





<div class="form-check" id="checkTrans">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  >
  <label class="form-check-label" >
  Transferencia bancaria
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  disabled>
  <label class="form-check-label">
  PAYPAL
  </label>
</div>







  
      </div>
      <div class="modal-footer">
        <button  type="button" class="rojoWith registrate " data-bs-dismiss="modal">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Cancelar</button>
        <button name="btn-agregar-tarjeta" class="with registrate">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Agregar</button>
      </div>
    </div>
  </div>
</div>
</form>



<div class="contenedora" id="contenedora">
<div class="spinner-grow text-light cargando" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
</div>




    <h2 class="titleMis">Mis reservaciones</h2>

<div class="title-alerta-sin-resrva" role="alert">
  <h2>DATOS</h2>
<div>
  <p class="propiedad" >ID Reservacion:</p> 
  <p class="bajar"> <?php echo $idReservacion?></p>

  <p class="propiedad">Nombre :</p>
  <p class="bajar"> <?php echo $namePerson." ".$lastName." ".$lastName2 ?>.</p>

  <p class="propiedad">Correo :</p>
  <p class="bajar"> <?php echo $correoElectronico?> </p>

  <p class="propiedad">Telefono :</p>
  <p class="bajar"><?php echo $numeroCelular?></p
  >
  <p class="propiedad">Hotel :</p> 
  <p class="bajar"><?php echo $nameHotel?></p>

  <p class="propiedad">Llegada :</p>
   <p class="bajar"><?php echo $llegada?></p>

  <p class="propiedad">Salida :</p>
   <p class="bajar"><?php echo $salida?></p>

  <p  class="propiedad">Personas :</p> 
  <p id="validar-personas" class="bajar"><?php echo $cantidadPersonas?></p>



<input id="person1" class="input-personas" type="text" placeholder="Nombre segunda persona" >
<input id="person2" class="input-personas" type="text" placeholder="Nombre tercera persona" >
<input id="person3" class="input-personas" type="text" placeholder="Nombre cuarta persona" >
<input id="person4" class="input-personas" type="text" placeholder="Nombre quinta persona" >
<input id="person5" class="input-personas" type="text" placeholder="Nombre sexta persona" >
<input id="person6" class="input-personas" type="text" placeholder="Nombre septima persona" >





  <p class="propiedad">Niños :</p>
   <p class="bajar"><?php echo $ninos?></p>

   <p class="propiedad">Dias :</p>
   <p class="bajar"><?php echo $numDias?></p>

  <p class="propiedad">Metodo de pago :</p>
   <button id="btn-agrega-pago">Agregar metodo de pago</button>

   <div class="tiene-card" id="tiene-card">
   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="5" width="18" height="14" rx="3" />
  <line x1="3" y1="10" x2="21" y2="10" />
  <line x1="7" y1="15" x2="7.01" y2="15" />
  <line x1="11" y1="15" x2="13" y2="15" />
</svg> <h3><?php echo "*".$tarjetaCompleta[12].$tarjetaCompleta[13].$tarjetaCompleta[14].$tarjetaCompleta[15]?></h3> 
</div>

   <p class="propiedad">Precio Total:</p>
   <p class="bajar"><?php echo "$ ".$totalPrice?></p>

   <button id="realziar-pago" class="realizar-pago">Realizar pago</button>


  </div>

</div> 






















        <div class="footer2 ">
<div class="img-footer">
  <img src="https://maquillaje.aprendesmart.com/wp-content/uploads/2021/04/paggo.png" alt="">
  <a href="">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg>
</a>
<a href="">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="56" height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="4" width="16" height="16" rx="4" />
  <circle cx="12" cy="12" r="3" />
  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
</svg>
</a>
</div>
<p>
© Mundo Travel México S.A. de C.V.. Todos los derechos reservados. Se prohíbe cualquier reproducción total o parcial de este contenido sin autorización por escrito de su titular. Es responsabilidad de la cadena hotelera y/o de la propiedad garantizar la exactitud de las fotografías mostradas. No nos hacemos responsables por inexactitudes en las fotografías. 
</p>
</div>

<script>
const realziarPago = document.getElementById("realziar-pago");
const alerta = document.getElementById("contenedora");

realziarPago.addEventListener("click",()=>{
  if(statusPago == "tarjeta credito"){
    alerta.style.display = "flex";
    setTimeout(alertFunc, 15000);
  }
})


const alertFunc=()=>{
  Swal.fire({
  icon: 'error',
  title: 'Lo sentimos',
  text: 'Pago RECHAZADO comunicate con tu banco'
})

alerta.style.display = "none";

}



  let checkDebito = document.getElementById("checkDebit");
  let checkCredit = document.getElementById("checkCredit");
  let checkTrans = document.getElementById("checkTrans");
  let debito = document.getElementById("debito");
  let credito = document.getElementById("credito");
  let validador = 0;
  let validador2 = 0;
  


checkDebito.addEventListener("click",()=>{
  
if (validador == 0){
  debito.style.display = "flex";
  credito.style.display ="none";

  validador = 1;
}else{
  debito.style.display = "none";
  credito.style.display ="none";

  validador = 0;
}

 
})



checkCredit.addEventListener("click",()=>{
  
  if (validador2 == 0){
    credito.style.display ="flex"
   debito.style.display = "none";
    
    validador2 = 1;
  }else{
    credito.style.display ="none"
    debito.style.display = "none";
    validador2 = 0;
  }
  
 
  })


checkTrans.addEventListener("click",()=>{

   credito.style.display ="none"
    debito.style.display = "none";


    Swal.fire({
  title: 'Pago Transferencia',
  text: "Para pagar con transferencia CONTACTANOS",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Contactar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.assign("https://facebook.com");
  }
})

})

  



let clienteId = "<?php echo $idReservacion?>";
console.log(clienteId);


</script>
  <script >
  
const metodoPago = document.getElementById("btn-agrega-pago");
const tieneCard = document.getElementById("tiene-card");

window.addEventListener("load",()=>{

  tieneCard.style.display = "none";
  metodoPago.style.display = "none";

  if (statusPago == "pendiente"){
    metodoPago.style.display = "block";


    metodoPago.addEventListener("click",()=>{

        metodoPago.setAttribute("data-bs-toggle","modal");
        metodoPago.setAttribute("data-bs-target","#staticBackdrop");
    });

  }else if(statusPago == "tarjeta credito"){
    tieneCard.style.display = "flex";
  }
  

});



const validarpersonas = document.getElementById("validar-personas").innerHTML;

if(validarpersonas <= 1){

  
document.getElementById("person1").style.display = "none";
document.getElementById("person2").style.display = "none";
document.getElementById("person3").style.display = "none";
document.getElementById("person4").style.display = "none";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";
  
}


if(validarpersonas == 2){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "none";
document.getElementById("person3").style.display = "none";
document.getElementById("person4").style.display = "none";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";

}


if(validarpersonas == 3){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "block";
document.getElementById("person3").style.display = "none";
document.getElementById("person4").style.display = "none";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";

}

if(validarpersonas == 4){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "block";
document.getElementById("person3").style.display = "block";
document.getElementById("person4").style.display = "none";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";

}

if(validarpersonas == 5){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "block";
document.getElementById("person3").style.display = "block";
document.getElementById("person4").style.display = "block";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";

}

if(validarpersonas == 6){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "block";
document.getElementById("person3").style.display = "block";
document.getElementById("person4").style.display = "block";
document.getElementById("person5").style.display = "block";
document.getElementById("person6").style.display = "none";

}

if(validarpersonas == 7){
document.getElementById("person1").style.display = "block";
document.getElementById("person2").style.display = "block";
document.getElementById("person3").style.display = "block";
document.getElementById("person4").style.display = "block";
document.getElementById("person5").style.display = "block";
document.getElementById("person6").style.display = "block";

}

if(validarpersonas >= 8){

  
document.getElementById("person1").style.display = "none";
document.getElementById("person2").style.display = "none";
document.getElementById("person3").style.display = "none";
document.getElementById("person4").style.display = "none";
document.getElementById("person5").style.display = "none";
document.getElementById("person6").style.display = "none";
  
}

  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>