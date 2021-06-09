const iconoMenu = document.querySelector("#icono-menu");
const form = document.getElementById("form");
const boton = document.getElementById("boton");


let imgActual = "img";
 


 function cambiar(){

    if(imgActual == "img"){
        iconoMenu.src = "img/open-menu2.png";
        imgActual = "img2";
    }else{
        iconoMenu.src = "img/open-menu.png";
        imgActual = "img";
    }
    
}







    
    



addEventListener("DOMContentLoaded",()=>{

    window.sr = ScrollReveal();


    
        sr.reveal(".imgLogo",{
            duration:3000,
         rotate: {
            x: 180,
            y: 360,
            
         }
        });

        sr.reveal(".contenedor",{
            duration : 1500,
            delay: 500,
            origin:"top",
            distance: "400px"
     
        });



        


    if(innerWidth < 468){

        sr.reveal(".left1",{
            duration : 1000,
            origin:"top",
            delay: 100,
            distance: "400px",
        
        });
        sr.reveal(".right1",{
            duration : 1000,
            delay: 100,
            origin:"bottom",
            distance: "400px",
        
        });
        sr.reveal(".bottom1",{
            duration : 1000,
            origin:"top",
            distance: "400px",
         
        })




 } 
        
})






   








    



    

    






  

  iconoMenu.addEventListener("click", (e)=>{
    // alternar estilos para el menu y body
    
   
    menu.classList.toggle("active");
    document.body.classList.toggle("opacity");
   
   
    cambiar();
   
    
    });

    
        
      





    
  
    
    
    

  


 






