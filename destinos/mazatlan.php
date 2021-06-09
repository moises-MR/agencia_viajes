<?php
include("header.php");



?>
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <title>Mazatlan Sinaloa</title>

  <div class="carrou">

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://paneladmin.mecoapp.com.mx/images/MEDIDA-PATROCINADOS-960X536-Renta-Can-am-Mazatlan.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://royalvillas.com.mx/uploads/promociones/espanol/miercoles3970.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://i.ytimg.com/vi/Vtpo52JF1ko/maxresdefault.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://images.ctfassets.net/awjurk6f9seg/6Y2ZRBap5DWXeMJK5N254j/2cfb65f22214ed105f05f0a672572c92/viajes-msi-388x260-02.jpg?q=60" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://bucketrediseno.s3.amazonaws.com/uploads/special/image/1306/optimizada_3_List.jpg" class="d-block w-100" alt="...">
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
let destino = "mazatlan";
</script>

</body>
</html>

<?php
include("footer.php");
?>
    
