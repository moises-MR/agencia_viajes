<?php
session_start();
ob_start();

include("header.php");
$destino = $_GET["hotel"];
$clienteId ="";
if ( isset($_SESSION['cliente']) ) {
  $clienteId = $_SESSION["cliente"];
}



?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/descripcion.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


  <title>Hoteles</title>

 



<br>
<br>
  <div id="items2" ></div>


  

  <template id="template-container-img"> 
    
  <div id="carouselExampleFade" class="carousel slide carousel-fade img-carru" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="img1" src="../img/amresor.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img2" src="../img/cancun.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img3" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img4" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img5" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img6" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img7" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img8" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img9" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img10" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img11" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img12" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img13" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img14" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img15" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img16" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img17" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img18" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img id="img19" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
     
    <img id="img20" src="../img/fiestaamericana.png"class="d-block w-100" alt="...">
    </div>
   
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon mio1" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon mio2" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  
</div>






</template>



<template id="templateVuelosPromo">


  <h2 id="promoFechasH2">Fechas Disponibles</h2>

  <div class="div-fechas">
  <div class="fechas-disponibles">
  <img id="imgPromoCalendario"  src="../img/icons/calendario.png" alt="">
  <p id="promoPFechas">Del 10 de Mayo al 5 de Julio.</p>
  </div>
  </div>

  <div class="div-fechas">
  <div class="fechas-disponibles">
  <img id="imgPromoPersonas"  src="../img/icons/2personas.png" alt="">
  <p id="promoPPersonas">2 Personas.</p>
  </div>
  </div>

  <h2 id="promoVuelos" >Vuelos</h2>

  <div class="div-fechas">
  <div class="fechas-disponibles">
  <img id="imgPromoAerolinea" alt="">
  <p id="aerolineaP"></p>
  </div>
  </div>






</template>





<form class="form-reservaciones" method="POST" >

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" ">
    <div class="modal-content">
      <div class="modal-header">
        <h2 style="font-size: 2rem;" class="modal-title" id="staticBackdropLabel">Reservaciones</h2>
        <button style="font-size: 2rem;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

     

<div class="fechas">
<div class="fecha-llegada">
  <label >Fecha de llegada :</label>
  <input name="dateLlegada" class="input-date" type="date" id="input-date-llegada" >
  </div>
  <div class="fecha-salida">
  <label >Fecha de Salida :</label>
  <input name="dateSalida" class="input-date" type="date"  id="input-date-salida">
  
  </div>
  </div>

<div class="selects">

  <select name="personas" class="form-select nueva-select" aria-label="Default select example" required>
  <option value="1" selected>Personas</option>
  <option value="1">1 persona</option>
  <option value="2">2 personas</option>
  <option value="3">3 personas</option>
  <option value="4">4 personas</option>
  <option value="5">5 personas</option>
  <option value="6">6 pesonas</option>
  <option value="7">7 personas</option>
</select>

<select name="ninos" class="form-select nueva-select" aria-label="Default select example" required>
  <option selected>Niños</option>
  <option value="0">Sin Niños</option>
  <option value="1">1 Niño</option>
  <option value="2">2 Niños</option>
  <option value="3">3 Niños</option>
  <option value="4">4 Niños</option>
  <option value="5">5 Niños</option>
  <option value="6">6 Niños</option>
  <option value="7">7 Niños</option>
</select>

</div>


<h2 id="name-hotel">Nombre del hotel</h2>

<input type="text" id="input-name" readonly name="name-hotel">
<input type="text" id="precio-hotel" readonly name="precio-hotel">



  
      </div>
      <div class="modal-footer">
        <button  type="button" class="registrate rojoWith" data-bs-dismiss="modal">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Cancelar</button>
        <button name="button-modal-reservaciones" class="registrate with" id="btn-reservar-modal">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Reservar</button>
      </div>
    </div>
  </div>
</div>
</form>











<template id="templateServicios">

<h2 id="titulo-hotel" class="title3"></h2>

<div class="servicioHotel">
<h2 id="servicio-ofrece" ></h2>

<div class="textIcon">
<img id="icono1" src=""  class="iconsService" alt="">
<p id="pServicio1"></p>
</div>

<div class="textIcon">
<img id="icono2" src=""  class="iconsService" alt="">
<p id="pServicio2"></p>
</div>

<div class="textIcon">
<img id="icono3" src=""  class="iconsService" alt="">
<p id="pServicio3"></p>
</div>



<div class="textIcon">
<img id="icono4" src=""  class="iconsService" alt="">
<p id="pServicio4"></p>
</div>

<hr>

<h2 id="conoceMas" ></h2>
<ul class="li">
  <li id="li1" ></li>
  <li id="li2" ></li>
  <li id="li3" ></li>
  <li id="li4"></li>
  <li id="li5" ></li>
<li onclick="Mostar()" id="ver20a" class="verMasLi" >Ver mas ▼</li>

  <div class="div-verMas" id="verMasLi">

  <p id="parrafo1VerMas">Princess Mundo Imperial Riviera Diamante se ubica frente a la playa en la Costera de Las Palmas, en Acapulco. El resort dispone de 5 piscinas con solárium para niños y adultos, campo de golf y gimnasio. Hay Wi-Fi con costo adicional.</p>
  <p id="parrafo2VerMas">El desayuno es servido a diario por un costo adicional en el restaurante Palapa Doña Victoria con salida directa a la playa, los demás restaurantes del hotel tienen opciones de gastronomía mexicana e internacional para el almuerzo o la cena. El bar ofrece diversas bebidas y aperitivos.</p>
  <p id="parrafo3VerMas"></p>
  <ul>
    <li id="liVerMas1" class="detalles">A 3 km de la Punta Diamante.</li>
    <li id="liVerMas2" class="detalles">A 11 km del Aeropuerto Internacional de Acapulco – General Juan N. Alvarez. </li>
    <li id="liVerMas3" class="detalles">El Parque Papagayo y el Museo Fuerte de San Diego se encuentran a 15 km del Princess Mundo Imperial Riviera Diamante Acapulco.</li>
    <li style="display: none;" id="precio"></li>
  </ul>
  <li onclick="Ocultar()" id="verMenos" class="verMasLi" >Ver menos ▲</li>

  </div>


</ul>



</div>



</template>



<button class="registrate" id="boton-reservar">
<span></span>
<span></span>
<span></span>
<span></span>
Reservar
</button>





<div class="alojamientoResponsable">
<div class="divpRes">
<p>Estos sellos indican que el alojamiento adapta sus servicios a las necesidades actuales y que cumple con los estándares requeridos por cada institución para garantizar tu bienestar.</p>
</div>
<div class="divimgRes">
<img src="https://media.staticontent.com/media/pictures/27aad976-775d-4816-9401-cc929ad81ffa" alt="">
<img src="https://media.staticontent.com/media/pictures/b410292b-d965-43a3-99ac-c506f1083b31" alt="">
</div>
</div>






  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script>
let destino = "<?php echo $destino?>";
let clienteId = "<?php echo $clienteId?>";



function Mostar(){

  document.getElementById("verMasLi").style.display = "block";
  let tween = gsap.from("#verMasLi",{
    duration : .8,
    scale : 0.1,
    stagger : 0.5
   
})
}

function Ocultar(){
  
  document.getElementById("verMasLi").style.display = "none";
 

  
}






</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="../js/hacerHotel.js"></script>
<script src="../js/login.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  
</body>
</html>

<?php
require "../php/app.php";
include("footer.php");







?>
    