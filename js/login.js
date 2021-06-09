


const btnReservar = document.getElementById("boton-reservar");
const btnOk = document.getElementsByClassName("swal2-confirm");


// const templateAlert = document.getElementById("template-alert");
// const contenedorReservaciones = document.getElementById("items2");
// const fragmetReservaciones = document.createDocumentFragment();













btnReservar.addEventListener("click",(e)=>{
  
  
  if(!clienteId){
   
 
      e.preventDefault(e);
       
      Swal.fire({
        title: 'Inicia Sesión para Reservar',
        text: "aun no estas registrado REGISTRATE",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `R E G I S T R A R M E`,
        denyButtonColor: "#2778c4",
        confirmButtonColor: "#2BC9F9",
        denyButtonText: `L O G I N`,
       
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location.assign("../registro.php");
        } else if (result.isDenied) {
          window.location.assign("../login.php");
        }
      })
    
       

  }else{
  
    btnReservar.setAttribute("data-bs-toggle","modal");
    btnReservar.setAttribute("data-bs-target","#staticBackdrop");

    const titulohott = document.getElementById("titulo-hotel");
    const titHotelModal = document.getElementById("name-hotel").innerHTML = titulohott.innerHTML;
 document.getElementById("input-name").value = titHotelModal;



  const precio = document.getElementById("precio").innerHTML;

  document.getElementById("precio-hotel").value = precio;

     
 
  }
  
 

})






