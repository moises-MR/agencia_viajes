<?php
include("header.php");



?>
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Cancun</title>

  <div class="carrou">

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://www.villapalmarcancun.com.mx/cms/resources/vacaciones-meses-sin-intereses-villa-palmar-cancun-share.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2sXbNnFjp_ujk0h2UKp0eDw0imAZ8trqUiQ&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://mk0cazaofertassmxlbf.kinstacdn.com/wp-content/uploads/2020/01/Xcaret-Mastercard-300120.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuRMazdb4zZlFwp05oxU7-R4qDz8B98BwlAA&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_8dXb9jln8jOssj02eoxfXsKhona26IcfgA&usqp=CAU" class="d-block w-100" alt="...">
    </div>
  </div>


  <div id="items"></div>


  <template id="template-card">
    <div class="div-imgcarrousel">
  <a id="a" >
  <img class="imgCarrousel" src="" alt="">
  </a>
  <div class="textprice">
  <!-- <h2 class="menosColor">Hotel + vuelo</h2> -->
  <h2 id="h2">Titulo Hotel</h2>
  <p>Saliendo de Guadalajara</p>
  <p id="p2">Precio por noche</p>
  <h4>MXN $</h4>
  <h5>6,999</h5>
</div>
</div>
  </template>


<script src="../js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script>
let destino = "cancun";
</script>

</body>
</html>

<?php
include("footer.php");
?>
    
