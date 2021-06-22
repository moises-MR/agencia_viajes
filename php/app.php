<?php


   $servername = "localhost";
   $username = "";
   $dbpass = "";
   $dbname = "";


//   $servername = "localhost";
//   $username = "root";
//   $dbpass = "";
//   $dbname = "mundot";

// Create connection
$conn = new mysqli($servername, $username, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}









if (isset($_POST['boton'])) {

    if (strlen($_POST['destino']) >= 1 && strlen($_POST['origen']) >= 1 
    && strlen($_POST['llegada']) >= 1 && strlen($_POST['salida']) >= 1
    && strlen($_POST['personas']) >= 1 && strlen($_POST['habitaciones']) >= 1) {

     
        $destino = trim($_POST['destino']);
        $origen = trim($_POST['origen']);
        $llegada = trim($_POST['llegada']);
        $salida = trim($_POST['salida']);
        $personas = trim($_POST['personas']);
        $habitaciones = trim($_POST['habitaciones']);


        $acapulco = "acapulco";
        $cancun = "cancun";
        $cdmx = "ciudad de mexico";
        $los_cabos = "los cabos";
        $mazatlan = "mazatlan";
        $playaCarmen = "playa del carmen";
        $ptoVallarta = "puerto vallarta";

      


        switch (strtolower($destino)) {
            case $acapulco:
                header("Location: destinos/acapulco.php");
                break;
            case $cancun:
                header("Location: destinos/cancun.php");
                break;
            case $cdmx:
                header("Location: destinos/cdmx.php");
                break;
            case $los_cabos:
                header("Location: destinos/los-cabos.php");
                break;
            case $mazatlan:
                header("Location: destinos/mazatlan.php");
                break;
            case $playaCarmen:
                header("Location: destinos/playa-del-carmen.php");
                break;  
                case $ptoVallarta:
                    header("Location: destinos/pto-vallarta.php");
                    break;           
        }


    }
}





if (isset($_POST['btn-registro'])) {

    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidoPat']) >= 1 
    && strlen($_POST['apellidoMat']) >= 1 && strlen($_POST['celular']) >= 1
    && strlen($_POST['correoE']) >= 1 && strlen($_POST['password']) >= 1 
    && strlen($_POST['passwordConfirm']) >= 1){

      

       $idUsuario = random_int(10000, 999999);

        $status = "pendiente";
       
        $nombre = trim($_POST['nombre']);
        $apellidoPat = trim($_POST['apellidoPat']);
        $apellidoMat = trim($_POST['apellidoMat']);
        $celular = trim($_POST['celular']);
        $correoE = trim($_POST['correoE']);
        $password = trim($_POST['password']);
        $passwordConfirm = trim($_POST['passwordConfirm']);
      
       
        
        $sql = "INSERT INTO clientes(nombre, apellidoPaterno, apellidoMaterno, celular, correoE,password, passwordConfirm,idUsuario )
        VALUES ('$nombre', '$apellidoPat', '$apellidoMat','$celular','$correoE','$password','$passwordConfirm','$idUsuario')";
        
        $sql2 = "INSERT INTO metodopago(idUsuario, statusPago )
        VALUES ('$idUsuario','$status')";
        $conn->query($sql2);



        if ( $password == $passwordConfirm){

            if ($conn->query($sql) === TRUE) {
                // echo "<script>alert('se creo correctamente'); </script>";
            } else {
                echo "<script>alert('Hubo un error'); </script>";
            }
            
            $sql = "SELECT idUsuario FROM clientes WHERE idUsuario = '$idUsuario'";
            $resultado = $conn->query($sql);
            $row = $resultado->fetch_assoc();
    
    
    
            session_start();
            $_SESSION['login']  = true;
            $_SESSION['cliente'] = $row["idUsuario"];
            header("Location:index.php");



        }else{
            echo "<script>alert('Error en la informacion')</script>";
        }


       



}




}








// $idUsuario = random_int(10000, 999999);

// echo "<script>alert($idUsuario); </script>";


if (isset($_POST['btn-validar'])) {

    if (strlen($_POST['correoEValidado']) >= 1 && strlen($_POST['passwordValidado']) >= 1 ){

        $correoIngresado = trim($_POST['correoEValidado']);
        $passwordIngresado = trim($_POST['passwordValidado']);
   



       
        $query = "SELECT * FROM clientes WHERE correoE = '{$correoIngresado}' ";
        $resultado = mysqli_query($conn, $query);

        
        

        if( $resultado->num_rows ) {
            $row = $resultado->fetch_assoc();
            $contra = $row["password"];
         

            if($contra == $passwordIngresado ){
                session_start();
                $_SESSION['cliente'] = $row["idUsuario"];
                header("Location:index.php");

            }
        }else{
            echo "<script>alert('Datos incorrectos'); </script>";
        }

    
       





        }




}








// modal - reservaciones validacion




if (isset($_POST['button-modal-reservaciones'])) {
    
  if (strlen($_POST['ninos']) >= 1 && strlen($_POST['personas']) >= 1 
  && strlen($_POST['dateSalida']) >= 1 && strlen($_POST['dateLlegada']) >= 1){
  
    $dateSalida = trim($_POST['dateSalida']);
    $dateLlegada = trim($_POST['dateLlegada']);
    $ninos = trim($_POST['ninos']);
    $personas = trim($_POST['personas']);
   
    //obtenidos por inputs invisibles :)
    $precio = trim($_POST['precio-hotel']);
    $nameHotel = trim($_POST['name-hotel']);

    // el metodo srt_replace sirve para remplazar valores de un String

    $diaLlegadaNumeros = str_replace("-","",$dateLlegada);
    $diaSalidaNumeros = str_replace("-","",$dateSalida);
    $precioModify = str_replace("$","",$precio);
    $precioModify2 = str_replace(",","",$precioModify);

    // variables con modificaciones y variables agregadas
    $numeroDias1 = $diaSalidaNumeros - $diaLlegadaNumeros;
    $numeroDias= 0;
    $precioTotal = 0;



    // se valida que la fecha escogina no sea en fin de mes si es en fin de mes no estara disponible
        if($numeroDias1 > 29){
            $numeroDias = "Fecha NO disponible";
        }else{
            $numeroDias = $numeroDias1;
            $precioTotal = $precioModify2 * $numeroDias;
        }



            // validamos el nombre de la promocion y restringuimos que se escojan mas de 3 dias


        if ($nameHotel == "Royal Solaris Cancun Resort, Marina &amp; Spa All Inclusive"){
            if($personas <= 2){
                if($numeroDias <= 4){
                    $precioTotal = $precioModify2;
               }else if($numeroDias >= 5){
                $numeroDias = "La promocion esta disponible solo para 4 dias";
                $precioTotal = 0;
               }
            }
            
        }


        if ($nameHotel == "Hotel Xcaret Mexico - All Parks &amp; Tours / All Inclusive"){
            if($numeroDias <= 3){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 4){
             $numeroDias = "La promocion esta disponible solo para 3 dias";
             $precioTotal = 0;
            }
        }

        if ($nameHotel == "Riu Vallarta All Inclusive"){
            if($numeroDias <= 4){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 5){
             $numeroDias = "La promocion esta disponible solo para 4 dias";
             $precioTotal = 0;
            }
        }

        
    
        if ($nameHotel == "El Cid El Moro Beach Hotel"){
            if($numeroDias <= 4){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 5){
             $numeroDias = "La promocion esta disponible solo para 4 dias";
             $precioTotal = 0;
            }
        }


        if ($nameHotel == "Krystal Cancun"){
            if($numeroDias <= 4){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 5){
             $numeroDias = "La promocion esta disponible solo para 4 dias";
             $precioTotal = 0;
            }
        }

        if ($nameHotel == "Riu Playacar"){
            if($numeroDias <= 3){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 4){
             $numeroDias = "La promocion esta disponible solo para 3 dias";
             $precioTotal = 0;
            }
        }

        if ($nameHotel == "Buenaventura Grand Beach Resort All Inclusive"){
            if($numeroDias <= 3){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 4){
             $numeroDias = "La promocion esta disponible solo para 3 dias";
             $precioTotal = 0;
            }
        }


        if ($nameHotel == "Krystal Puerto Vallarta"){
            if($numeroDias <= 3){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 4){
             $numeroDias = "La promocion esta disponible solo para 3 dias";
             $precioTotal = 0;
            }
        }
    

        if ($nameHotel == "Princess Mundo Imperial Riviera Diamante Acapulco"){
            if($numeroDias <= 4){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 5){
             $numeroDias = "La promocion esta disponible solo para 4 dias";
             $precioTotal = 0;
            }
        }
        if ($nameHotel == "Riu Cancun"){
            if($numeroDias <= 5){
                 $precioTotal = $precioModify2;
            }else if($numeroDias >= 6){
             $numeroDias = "La promocion esta disponible solo para 5 dias";
             $precioTotal = 0;
            }
        }

        
        


  $idReservaciones = random_int(10000, 999999);

 


 
    
    $sql = "INSERT INTO reservaciones(idUsuario,idReservaciones,nombreHotel,salida,llegada, personas, ninos,numeroDias,precioTotal)
    VALUES ('$cliente','$idReservaciones', '$nameHotel','$dateSalida', '$dateLlegada', '$personas','$ninos','$numeroDias','$precioTotal')";


    $_SESSION["idReservaciones"] = $idReservaciones;
    if ($conn->query($sql) === TRUE) {
        // echo "<script>alert('se creo correctamente'); </script>";
    } else {
        echo "<script>alert('Hubo un error'); </script>";
    }
    

    header("Location: ../mis-reservaciones.php");

  }
}








// agregar tarjeta


if (isset($_POST['btn-agregar-tarjeta'])) {


    if (strlen($_POST['inputNombre']) >= 1 && strlen($_POST['inputCard']) >= 1 
  && strlen($_POST['inputVencimiento']) >= 1 && strlen($_POST['inputCvv']) >= 1
  && strlen($_POST['inputCalle']) >= 1 && strlen($_POST['inputNumero']) >= 1
  && strlen($_POST['inputColonia']) >= 1 && strlen($_POST['inputMunicipio']) >= 1
  && strlen($_POST['inputEstado']) >= 1 && strlen($_POST['inputCp']) >= 1){
  
    $nombre = trim($_POST["inputNombre"]); 
    $card = trim($_POST["inputCard"]); 
    $vencimiento = trim($_POST["inputVencimiento"]); 
    $cvv = trim($_POST["inputCvv"]); 
    $calle = trim($_POST["inputCalle"]); 
    $numero = trim($_POST["inputNumero"]); 
    $colonia = trim($_POST["inputColonia"]); 
    $municipio = trim($_POST["inputMunicipio"]); 
    $estado = trim($_POST["inputEstado"]); 
    $cp = trim($_POST["inputCp"]); 

    $actualizarPago = "UPDATE metodopago SET tarjeta='$card', vencimiento='$vencimiento', 
    cvv='$cvv', statusPago='tarjeta credito' WHERE idUsuario='$cliente' ";
   $resultado = mysqli_query($conn,$actualizarPago);






  }
  
  if(strlen($_POST['inputNombre2']) >= 1 && strlen($_POST['inputCard2']) >= 1 
  && strlen($_POST['inputVencimiento2']) >= 1 && strlen($_POST['inputCvv2']) >= 1
  && strlen($_POST['inputCalle2']) >= 1 && strlen($_POST['inputNumero2']) >= 1
  && strlen($_POST['inputColonia2']) >= 1 && strlen($_POST['inputMunicipio2']) >= 1
  && strlen($_POST['inputEstado2']) >= 1 && strlen($_POST['inputCp2']) >= 1){
 
    $nombre = trim($_POST["inputNombre2"]); 
    $card = trim($_POST["inputCard2"]); 
    $vencimiento = trim($_POST["inputVencimiento2"]); 
    $cvv = trim($_POST["inputCvv2"]); 
    $calle = trim($_POST["inputCalle2"]); 
    $numero = trim($_POST["inputNumero2"]); 
    $colonia = trim($_POST["inputColonia2"]); 
    $municipio = trim($_POST["inputMunicipio2"]); 
    $estado = trim($_POST["inputEstado2"]); 
    $cp = trim($_POST["inputCp2"]); 

    $actualizarPago = "UPDATE metodopago SET tarjeta='$card', vencimiento='$vencimiento', 
    cvv='$cvv', statusPago='tarjeta credito' WHERE idUsuario='$cliente' ";
   $resultado = mysqli_query($conn,$actualizarPago);
   
  }
   
  
 

}








