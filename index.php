<?php
ob_start();
require "php/app.php";



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="css/hamburguesa.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
  $( function() {
 
        const edos = [
            "Aguascalientes",
            "Baja California",
            "Baja California Sur",
            "Campeche",
            "Coahuila de Zaragoza	",
            "Colima",
            "Chiapas",
            "Chihuahua",
            "Cidad de Mexico",
            "Durango",
            "Guanajuato",
            "Guerrero",
            "Hidalgo",
            "Guadalajara, Jalisco",
            "México",
            "Michoacán de Ocampo",
            "Morelos",
            "Nayarit",
            "Monterrey, Nuevo León	",
            "Oaxaca",
            "Puebla",
            "Querétaro",
            "Quintana Roo",
            "San Luis Potosí",
            "Sinaloa",
            "Sonora",
            "Tabasco",
            "Tamaulipas",
            "Tlaxcala",
            "Veracruz de Ignacio de la Llave",
            "Yucatán",
            "Zacatecas",
            
        ];
        $("#origen").autocomplete({
            source:edos
        });

    
  
  } );
  </script>
    <title>Mundo Travel</title>
</head>
<body>






















<!-- menu hamburguesa -->

<div class="menu-ham">
    <img class="imgH" src="img/open-menu.png" alt="" id="icono-menu">
</div>
<div class="cont-menu active" id="menu">
    <ul class="ulH">
        <a href="index.php"><li class="liH">Home</li></a>
        <a href="login.php"><li class="liH">Login</li></a>
       <a href="#para-menu-hamburguesa"><li class="liH">Promociones</li></a> 
       <a href="https://facebook.com"> <li class="liH">Contacto</li></a>

    </ul>
</div>

<!-- header -->

<header class="header">
<img class="beach-background" src="img/mar.png" alt="">

<img src="img/logoviaje.png" alt="logo" class="imgLogo">


</header>


<div class="div-video">
<!-- <video autoplay loop  muted class="videoff" src="img/playa.webm" ></video> -->

<div class="contenedor">

<form method="post" id="form">

<h1 class="titleh1">prepara tu viaje</h1>
<div class="ciudades">
<h2 class="destino marginTop">Origen</h2>
<input name="origen" class="inputOrigen" type="text" id="origen">



<h2  class="destino">Destino</h2>

<select name="destino" class="form-select form-select-lg mb-3 dateNew masWidth" >
  <option selected >Destino</option>
  <option >Mazatlan</option>
  <option >Ciudad de Mexico</option>
  <option >Acapulco</option>
  <option >Puerto Vallarta</option>
  <option >Playa del carmen</option>
  <option >Cancun</option>
</select>

</div>
<div class="div-date">
<h2 class="destino display">Llegada</h2>
<h2 class="destino display">Salida</h2>
<input name="llegada" class="dateNew" type="date">
<input name="salida" class="dateNew" type="date">
</div>
<div class="div-date">
<h2 class="destino display">Personas</h2>
<h2 class="destino display">Niños</h2>
<select name="personas" class="form-select form-select-lg mb-3 dateNew" >
  <option selected >0</option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  <option >6</option>
  <option >7</option>
  <option >8</option>
</select>
<select class="form-select form-select-lg mb-3 dateNew" name="habitaciones" >
  <option selected >0</option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  <option >6</option>
  <option >7</option>
  <option >8</option>
</select>


</div>
<button name="boton" class="boton">🔎 Buscar</button>
</div>


</form>
</div>





<h1 class="title2">Hoteles recomendados para tu viaje</h1>


<div class="meg-div-hotels">

<div class="hotels-recomeds">
<img class="img-hotels" src="img/hardrock.jpg" alt="">
</div>

<div class="hotels-recomeds">
<img class="img-hotels" src="img/amresor.jpg" alt="">
</div>
<div class="hotels-recomeds">
<img class="img-hotels" src="img/universal.png" alt="">
</div>
<div class="hotels-recomeds">
<img class="img-hotels" src="img/seadust.png" alt="">
</div>
<div class="hotels-recomeds">
<img class="img-hotels" src="img/oasis.jpg" alt="">
</div>
<div class="hotels-recomeds">
<img class="img-hotels" src="img/fiestaamericana.png" alt="">
</div>
</div>

<!-- Hotels and flights -->
<h2 id="para-menu-hamburguesa" class="title3">Compra tu hotel + vuelo</h2>

<div class="div-vuelos-hotel">



<div class="todo-div left1">
<a  href="destinos/hotel.php?hotel=promo-cancun-vuelo-emporio">
<div class="hotel-vuelo">
<img class="img-hot-vuel" src="https://media.staticontent.com/media/pictures/e0ac0ee3-2d22-4e7e-9b6c-b24097e6754b/1120x700?op=fit" alt="playa-del-carmen">
<div class="shadow">
<div class="text-shadow">
    <h3   class="promo-text">Royal Solaris Cancun - All Inclusive</h3>
    <p class="promo-text2">Saliendo de Guadalajara   - <b class="espace">4 dias</b></p>
    <p class="promo-text2">2 personas vuelos redondos   <b class="espace"> $12,999</b> </p>
</div>
</div>
</div>
</a>
</div>

<div class="todo-div right1">
<a  href="destinos/hotel.php?hotel=promo-xcaret-vuelo">
<div class="hotel-vuelo">
<img class="img-hot-vuel" src="img/promo/xcaret1.webp" alt="hotel-xcaret">
<div class="shadow">
<div class="text-shadow">
    <h3 id="xcarte" class="promo-text">Hotel Xcaret Mexico All Parks & Tours </h3>
    <p class="promo-text2">Saliendo de Monterrey   - <b class="espace">3 dias</b></p>
    <p class="promo-text2">2 personas vuelos redondos   <b class="espace"> $14,999</b> </p>
</div>
</div>
</div>
</a>
</div>

<div class="todo-div bottom1">
<a href="destinos/hotel.php?hotel=promo-vallarta-vuelo">
<div  class="hotel-vuelo" >
<img class="img-hot-vuel" src="https://media.staticontent.com/media/pictures/828b2c14-1ef6-4cf6-a23f-3fb442866605/853x0?op=NONE&enlarge=false&gravity=ce_0_0&quality=80&dpr=1" alt="playa-del-carmen">
<div class="shadow">
<div class="text-shadow">
    <h3 class="promo-text">Riu Vallarta</h3>
    <p class="promo-text2">Saliendo de Ciudad de Mexico   - <b class="espace">4 dias</b></p>
    <p class="promo-text2">2 personas vuelos redondos   <b  class="espace"> $14,999</b> </p>
</div>
</div>
</div>
</a>
</div>


</div>



<img class="meses" src="img/meses.jpg" alt="">



<!-- carrousel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
   <div class="carousel-item active">
   <!-- imagen con texto -->
 <div class="div-imgcarrousel">
  <a href="destinos/hotel.php?hotel=promo-cid-vuelo-mazatlan" >
  <img class="imgCarrousel" src="https://media.staticontent.com/media/pictures/0df86d18-9023-4e3f-9e64-5802842a6eb8/1120x700?op=fit" alt="">
  
  <div class="textprice">
  <h2 class="menosColor">Hotel + vuelo</h2>
  <h2>Mazatlan saliendo de Ciudad de Mexico</h2>
  <p>Precio por persona</p>
  <h4>MXN $</h4>
  <h5>13,999</h5>
  </a>
</div>
</div>
    </div>
    <div class="carousel-item">
     <!-- imagen con texto -->
 <div class="div-imgcarrousel">
 <a href="destinos/hotel.php?hotel=promo-krystal-vuelo-cancun" >
  <img class="imgCarrousel" src="https://media.staticontent.com/media/pictures/ce438c39-292f-4b7c-8c66-92481091bd75/1120x700?op=fit" alt="">
  <div class="textprice">
  <h2 class="menosColor">Hotel + vuelo</h2>
  <h2>Cancun saliendo de Guadalajara</h2>
  <p>Precio por persona</p>
  <h4>MXN $</h4>
  <h5>11,999</h5>
  </a>
</div>
</div>
    </div>
    <div class="carousel-item">
    <!-- imagen con texto -->
 <div class="div-imgcarrousel">
 <a href="destinos/hotel.php?hotel=promo-playa-carmen-vuelo-cancun" >
  <img class="imgCarrousel" src="https://media.staticontent.com/media/pictures/66944900-8c1e-4f34-a96b-b701974b60ea/1120x700?op=fit" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">Hotel + vuelo</h2>
  <h2>Playa del Carmen saliendo de Monterrey</h2>
  <p>Precio por persona</p>
  <h4>MXN $</h4>
  <h5>10,999</h5>
  </a>
</div>
</div>
    </div>

    <div class="carousel-item">
     <!-- imagen con texto -->
 <div class="div-imgcarrousel">
 <a href="destinos/hotel.php?hotel=promo-puerto-vallarta-vuelo" >
  <img class="imgCarrousel" src="https://media.staticontent.com/media/pictures/024e96c5-a9e6-4c77-ad05-659aab390178/1120x700?op=fit" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">Hotel + vuelo</h2>
  <h2>Pto Vallarta saliendo de Ciudad de Mexico</h2>
  <p>Precio por persona</p>
  <h4>MXN $</h4>
  <h5>10,999</h5>
  </a>
</div>
</div>
    </div>


    <div class="carousel-item">
     <!-- imagen con texto -->
 <div class="div-imgcarrousel">
 <a href="destinos/hotel.php?hotel=promo-puerto-vallarta-vuelo-hyatt" >
  <img class="imgCarrousel" src="https://media.staticontent.com/media/pictures/f6a59c92-861a-4ba0-b065-9b84604f308c/1120x700?op=fit" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">hotel + vuelo</h2>
  <h2>Pto Vallarta saliendo de Ciudad de Mexico</h2>
  <p>Precio por persona</p>
  <h4>MXN $</h4>
  <h5>10,999</h5>
</div>
</div>
    </div>

  </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon mio1" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon mio2" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 



<!-- only and flights -->
<h2  class="title3">HOTELES</h2>

<div class="div-vuelos-hotel">

<div class="todo-div masw left1">
<a href="destinos/hotel.php?hotel=promo-riu-cancun-vuelo">
<div class="hotel-vuelo">
<img class="img-hot-vuel" src="https://media.staticontent.com/media/pictures/f5189ed3-413a-4df9-b192-63a21dcfe556/1120x700?op=fit" alt="riu">
<div class="shadow maswshadow">
<div class="text-shadow">
    <h3 class="promo-text">Riu Cancun All Inclusive</h3>
    <p class="promo-text2">Saliendo de CDMX y Monterrey<b class="espace"></b></p>
    <p class="promo-text2">4 personas 5 dias<b class="espace"> $22,999</b> </p>
</div>
</div>
</div>
</a>
</div>

<div class="todo-div masw right1">

<a href="destinos/hotel.php?hotel=promo-princess-acapulco">
<div class="hotel-vuelo">
<img class="img-hot-vuel" src="https://media.staticontent.com/media/pictures/623c3720-a50f-42f3-a4be-e080a885a7f7/1120x700?op=fit" alt="playa-del-carmen">
<div class="shadow maswshadow">
<div class="text-shadow">
    <h3 class="promo-text">Princess Mundo Imperial Riviera Diamante Acapulco All Inclusive</h3>
    <p class="promo-text2">Saliendo de Guadalajara y Monterrey<b class="espace"></b></p>
    <p class="promo-text2">4 personas 4 dias<b class="espace"> $18,999</b> </p>
</div>
</div>
</div>
</a>
</div>

</div>
<img class="meses" src="" alt="">


<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- imagen con texto -->
 <div class="div-imgcarrousel">
 <a href="destinos/mazatlan.php">
  <img class="imgCarrousel" src="img/hoteles/mazatlan.webp" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">Hotel</h2>
  <h2>Mazatlan</h2>
  <p>Desde</p>
  <h4>MXN </h4>
  <h5>$ 1,099</h5>
 
</div>
</div>
    </div>
    <div class="carousel-item">
      <!-- imagen con texto -->
 <div class="div-imgcarrousel">
  <a href="destinos/cdmx.php">
  <img class="imgCarrousel" src="img/hoteles/cdmx.webp" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">Hotel</h2>
  <h2>Ciudad de Mexico</h2>
  <p>Desde</p>
  <h4>MXN </h4>
  <h5>$ 999</h5>
</div>
</div>
    </div>
    <div class="carousel-item">
      <!-- imagen con texto -->
 <div class="div-imgcarrousel">
  <a href="destinos/cancun.php">
  <img class="imgCarrousel" src="img/hoteles/cancun.webp" alt="">
  </a>
  <div class="textprice">
  <h2 class="menosColor">Hotel</h2>
  <h2 id="des">Cancun</h2>
  <p>Desde</p>
  <h4>MXN $</h4>
  <h5>1,099</h5>
</div>
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon mio1" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon mio2" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<a href="registro.php?resgitro="><img class="btnRegister" src="img/registro.png" alt=""></a>

<?php

include("destinos/footer.php");
require "php/app.php";



?>



<script src="js/hacerHotel.js"></script>
<script src="js/app.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</body>

</html>