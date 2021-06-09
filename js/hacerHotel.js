const templateImg = document.getElementById("template-container-img").content;
const container = document.getElementById("items2");
const fragmet2 = document.createDocumentFragment();


const fragmet3 = document.createDocumentFragment();
const templateImg2 = document.getElementById("templateServicios").content;


const fragmet4 = document.createDocumentFragment();
const templateVuelos = document.getElementById("templateVuelosPromo").content;
const containerPromo = document.getElementById("div-promo-template");






document.addEventListener("DOMContentLoaded", () => {
   


   insertarImg();

  
    
   
   
});





const insertarImg = async () =>{
    
        const res = await fetch('../js/apiHoteles.json');
        const res2 = await fetch('../js/servicios.json');
        const promociones = await fetch('../js/dataPromociones.json');
   
        const dataGlobal = await res.json();
        const dataGlobal2 = await res2.json();
        const dataPromociones = await promociones.json();

    
      validarHotel(dataGlobal);
      validarPromocion(dataPromociones);
      validarHotel2(dataGlobal2);

  return dataGlobal2;
}




const validarHotel = (data) =>{

  



    if(destino == "Princess Mundo Imperial Riviera Diamante Acapulco"){  
        pintarImgs(data.slice(0,1));  
    }else if(destino == "Dreams Acapulco Resort "){
        pintarImgs(data.slice(1,2));  
    }else if(destino == "Hotel Costa Azul"){
        pintarImgs(data.slice(2,3));  
    }else if(destino == "Palacio Mundo Imperial"){
        pintarImgs(data.slice(3,4));
    }else if(destino == "Emporio Acapulco"){
        pintarImgs(data.slice(4,5));
    }else if(destino == "Hotel Playa Suites Acapulco"){
        pintarImgs(data.slice(5,6));
    }else if(destino == "Romano Palace Acapulco"){
        pintarImgs(data.slice(6,7));
    }else if(destino == "Las Torres Gemelas Acapulco"){
        pintarImgs(data.slice(7,8));
    }else if(destino == "Krystal Beach Acapulco"){
        pintarImgs(data.slice(8,9));
    }else if(destino == "Fiesta Americana Acapulco Villas"){
        pintarImgs(data.slice(9,10));
    }else if(destino == "Barceló México Reforma"){
        pintarImgs(data.slice(10,11));
    }else if(destino == "Galeria Plaza Reforma"){
        pintarImgs(data.slice(11,12));
    }else if(destino == "Krystal Grand Insurgentes Sur"){
        pintarImgs(data.slice(12,13));
    }else if(destino == "Mexico City Marriott Reforma Hotel"){
        pintarImgs(data.slice(13,14));
    }else if(destino == "Emporio Reforma"){
        pintarImgs(data.slice(14,15));
    }else if(destino == "Presidente Intercontinental Mexico City"){
        pintarImgs(data.slice(15,16));
    }else if(destino == "Hotel Fontan Reforma"){
        pintarImgs(data.slice(16,17));
    }else if(destino == "Hotel El Ejecutivo by Reforma Avenue"){
        pintarImgs(data.slice(17,18));
    }else if(destino == "Marquis Reforma"){
        pintarImgs(data.slice(18,19));
        // pto-vallarta
    }else if(destino == "Buenaventura Grand Beach Resort All Inclusive"){
        pintarImgs(data.slice(19,20));
    }else if(destino == "Krystal Puerto Vallarta"){
        pintarImgs(data.slice(20,21));
    }else if(destino === "Sheraton Buganvilias Resort "){
        console.log(data.slice(25,26));
        pintarImgs(data.slice(21,22));
    }else if(destino == "Sunset Plaza Beach Resort "){
        pintarImgs(data.slice(22,23));
    }else if(destino == "Fiesta Americana Puerto Vallarta All Inclusive "){
        pintarImgs(data.slice(23,24));
    }else if(destino == "Hotel Mio Vallarta"){
        pintarImgs(data.slice(24,25));
    }else if(destino == "Fiesta Inn Puerto Vallarta Isla"){
        pintarImgs(data.slice(25,26));
    }else if(destino == "The Hacienda at Hilton Puerto Vallarta"){
        pintarImgs(data.slice(26,27));
    }else if(destino == "Crown Paradise Golden All Inclusive - Adults Only"){
        pintarImgs(data.slice(27,28));
    }else if(destino == "Barceló Gran Faro Los Cabos All Inclusive"){
        pintarImgs(data.slice(28,29));
    }else if(destino == "Hyatt Ziva Los Cabos All Inclusive"){
        pintarImgs(data.slice(29,30));
    }else if(destino == "Posada Real Los Cabos"){
        pintarImgs(data.slice(30,31));
    }else if(destino == "Dreams Los Cabos Suites Golf Resort "){
        pintarImgs(data.slice(31,32));
    }else if(destino == "Hotel El Ganzo"){
        pintarImgs(data.slice(32,33));
    }else if(destino == "Hotel Suites Las Palmas"){
        pintarImgs(data.slice(33,34));
    }else if(destino == "City Express Plus Cabo San Lucas"){
        pintarImgs(data.slice(34,35));
    }else if(destino == "Riu Playacar"){
        pintarImgs(data.slice(35,36));
    }else if(destino == "Sandos Playacar All Inclusive"){
        pintarImgs(data.slice(36,37));
    }else if(destino == "The Reef Playacar Resort "){
        pintarImgs(data.slice(37,38));
    }else if(destino == "Allegro Playacar All Inclusive"){
        pintarImgs(data.slice(38,39));
    }else if(destino == "Grand Riviera Princess All Suites Resort "){
        pintarImgs(data.slice(39,40));
    }else if(destino == "Ocean Riviera Paradise El Beso - Adults Only"){
        pintarImgs(data.slice(40,41));
    }else if(destino == "Riu Lupita All Inclusive"){
        pintarImgs(data.slice(41,42));
    }else if(destino == "Ocean Riviera Paradise All Inclusive"){
        pintarImgs(data.slice(42,43));
    }else if(destino == "Riu Palace Mexico All Inclusive"){
        pintarImgs(data.slice(43,44));
    }else if(destino == "The Royal Haciendas Resort "){
        pintarImgs(data.slice(44,45));
    }else if(destino == "Pueblo Bonito Emerald Bay Resort "){
        pintarImgs(data.slice(45,46));
    }else if(destino == "Ocean View Beach Hotel"){
        pintarImgs(data.slice(46,47));
    }else if(destino == "Holiday Inn Resort Mazatlan"){
        pintarImgs(data.slice(47,48));
    }else if(destino == "El Cid Castilla Beach Hotel"){
        pintarImgs(data.slice(48,49));
    }else if(destino == "Marena Suites and Apartments"){
        pintarImgs(data.slice(49,50));
    }else if(destino == "El Cid El Moro Beach Hotel"){
        pintarImgs(data.slice(50,51));
    }else if(destino == "The Inn at Mazatlan"){
        pintarImgs(data.slice(51,52));
    }else if(destino == "Royal Villas Resort"){
        pintarImgs(data.slice(52,53));
    }else if(destino == "El Cid Marina Beach Hotel"){
        pintarImgs(data.slice(53,54));
    }else if(destino == "Park Royal Beach Mazatlán"){
        pintarImgs(data.slice(54,55));
    }else if(destino == "Seadust Cancun Family Resort"){
        pintarImgs(data.slice(55,56));
    }else if(destino == "Emporio Cancún"){
        pintarImgs(data.slice(56,57));
    }else if(destino == "Cancun Bay Hotel"){
        pintarImgs(data.slice(57,58));
    }else if(destino == "Krystal Cancun"){
        pintarImgs(data.slice(58,59));
    }else if(destino == "Oleo Cancun Playa All Inclusive Boutique Resort"){
        pintarImgs(data.slice(59,60));
    }else if(destino == "Grand Oasis Cancun All Inclusive"){
        pintarImgs(data.slice(60,61));
    }else if(destino == "Riu Cancun"){
        pintarImgs(data.slice(61,62));
    }else if(destino == "Dreams Sands Cancún Resort "){
        pintarImgs(data.slice(62,63));
    }else if(destino == "Oasis Palm"){
        pintarImgs(data.slice(63,64));
    }else if(destino == "Flamingo Cancun Resort"){
        pintarImgs(data.slice(64,65));
        // Promociones
    }else if(destino == "promo-cancun-vuelo-emporio"){
        pintarImgs(data.slice(65,66));
    }else if(destino == "promo-xcaret-vuelo"){
        pintarImgs(data.slice(66,67));
    }else if(destino == "promo-vallarta-vuelo"){
        pintarImgs(data.slice(67,68));
    }else if(destino == "promo-cid-vuelo-mazatlan"){
        pintarImgs(data.slice(50,51));
    }else if(destino == "promo-krystal-vuelo-cancun"){
        pintarImgs(data.slice(58,59));
    }else if(destino == "promo-playa-carmen-vuelo-cancun"){
        pintarImgs(data.slice(35,36));
    }else if(destino == "promo-puerto-vallarta-vuelo"){
        pintarImgs(data.slice(19,20));
    }else if(destino == "promo-princess-acapulco"){
        pintarImgs(data.slice(0,1));  
    }else if(destino == "promo-riu-cancun-vuelo"){
        pintarImgs(data.slice(61,62));
    }



       
   
    
    
    }






    const validarHotel2 = (data) =>{

  


        if(destino == "Princess Mundo Imperial Riviera Diamante Acapulco"){  
            pintarImgs2(data.slice(0,1));  
        }else if(destino == "Dreams Acapulco Resort "){
            pintarImgs2(data.slice(1,2));  
        }else if(destino == "Hotel Costa Azul"){
            pintarImgs2(data.slice(2,3));  
        }else if(destino == "Palacio Mundo Imperial"){
            pintarImgs2(data.slice(3,4));
        }else if(destino == "Emporio Acapulco"){
            pintarImgs2(data.slice(4,5));
        }else if(destino == "Hotel Playa Suites Acapulco"){
            pintarImgs2(data.slice(5,6));
        }else if(destino == "Romano Palace Acapulco"){
            pintarImgs2(data.slice(6,7));
        }else if(destino == "Las Torres Gemelas Acapulco"){
            pintarImgs2(data.slice(7,8));
        }else if(destino == "Krystal Beach Acapulco"){
            pintarImgs2(data.slice(8,9));
        }else if(destino == "Fiesta Americana Acapulco Villas"){
            pintarImgs2(data.slice(9,10));
        }else if(destino == "Barceló México Reforma"){
            pintarImgs2(data.slice(10,11));
        }else if(destino == "Galeria Plaza Reforma"){
            pintarImgs2(data.slice(11,12));
        }else if(destino == "Krystal Grand Insurgentes Sur"){
            pintarImgs2(data.slice(12,13));
        }else if(destino == "Mexico City Marriott Reforma Hotel"){
            pintarImgs2(data.slice(13,14));
        }else if(destino == "Emporio Reforma"){
            pintarImgs2(data.slice(14,15));
        }else if(destino == "Presidente Intercontinental Mexico City"){
            pintarImgs2(data.slice(15,16));
        }else if(destino == "Hotel Fontan Reforma"){
            pintarImgs2(data.slice(16,17));
        }else if(destino == "Hotel El Ejecutivo by Reforma Avenue"){
            pintarImgs2(data.slice(17,18));
        }else if(destino == "Marquis Reforma"){
            pintarImgs2(data.slice(18,19));
            // pto-vallarta
        }else if(destino == "Buenaventura Grand Beach Resort All Inclusive"){
            pintarImgs2(data.slice(19,20));
        }else if(destino == "Krystal Puerto Vallarta"){
            pintarImgs2(data.slice(20,21));
        }else if(destino === "Sheraton Buganvilias Resort "){
            console.log(data.slice(25,26));
            pintarImgs2(data.slice(21,22));
        }else if(destino == "Sunset Plaza Beach Resort "){
            pintarImgs2(data.slice(22,23));
        }else if(destino == "Fiesta Americana Puerto Vallarta All Inclusive "){
            pintarImgs2(data.slice(23,24));
        }else if(destino == "Hotel Mio Vallarta"){
            pintarImgs2(data.slice(24,25));
        }else if(destino == "Fiesta Inn Puerto Vallarta Isla"){
            pintarImgs2(data.slice(25,26));
        }else if(destino == "The Hacienda at Hilton Puerto Vallarta"){
            pintarImgs2(data.slice(26,27));
        }else if(destino == "Crown Paradise Golden All Inclusive - Adults Only"){
            pintarImgs2(data.slice(27,28));
            // los cabos
        }else if(destino == "Barceló Gran Faro Los Cabos All Inclusive"){
            pintarImgs2(data.slice(28,29));
        }else if(destino == "Hyatt Ziva Los Cabos All Inclusive"){
            pintarImgs2(data.slice(29,30));
        }else if(destino == "Posada Real Los Cabos"){
            pintarImgs2(data.slice(30,31));
        }else if(destino == "Dreams Los Cabos Suites Golf Resort "){
            pintarImgs2(data.slice(31,32));
        }else if(destino == "Hotel El Ganzo"){
            pintarImgs2(data.slice(32,33));
        }else if(destino == "Hotel Suites Las Palmas"){
            pintarImgs2(data.slice(33,34));
        }else if(destino == "City Express Plus Cabo San Lucas"){
            pintarImgs2(data.slice(34,35));

             // playa del carmen
        }else if(destino == "Riu Playacar"){
            pintarImgs2(data.slice(35,36));
        }else if(destino == "Sandos Playacar All Inclusive"){
            pintarImgs2(data.slice(36,37));
        }else if(destino == "The Reef Playacar Resort "){
            pintarImgs2(data.slice(37,38));
        }else if(destino == "Allegro Playacar All Inclusive"){
            pintarImgs2(data.slice(38,39));
        }else if(destino == "Grand Riviera Princess All Suites Resort "){
            pintarImgs2(data.slice(39,40));
        }else if(destino == "Ocean Riviera Paradise El Beso - Adults Only"){
            pintarImgs2(data.slice(40,41));
        }else if(destino == "Riu Lupita All Inclusive"){
            pintarImgs2(data.slice(41,42));
        }else if(destino == "Ocean Riviera Paradise All Inclusive"){
            pintarImgs2(data.slice(42,43));
        }else if(destino == "Riu Palace Mexico All Inclusive"){
            pintarImgs2(data.slice(43,44));
        }else if(destino == "The Royal Haciendas Resort "){
            pintarImgs2(data.slice(44,45));
            // mazatlan
        }else if(destino == "Pueblo Bonito Emerald Bay Resort "){
            pintarImgs2(data.slice(45,46));
        }else if(destino == "Ocean View Beach Hotel"){
            pintarImgs2(data.slice(46,47));
        }else if(destino == "Holiday Inn Resort Mazatlan"){
            pintarImgs2(data.slice(47,48));
        }else if(destino == "El Cid Castilla Beach Hotel"){
            pintarImgs2(data.slice(48,49));
        }else if(destino == "Marena Suites and Apartments"){
            pintarImgs2(data.slice(49,50));
        }else if(destino == "El Cid El Moro Beach Hotel"){
            pintarImgs2(data.slice(50,51));
        }else if(destino == "The Inn at Mazatlan"){
            pintarImgs2(data.slice(51,52));
        }else if(destino == "Royal Villas Resort"){
            pintarImgs2(data.slice(52,53));
        }else if(destino == "El Cid Marina Beach Hotel"){
            pintarImgs2(data.slice(53,54));
        }else if(destino == "Park Royal Beach Mazatlán"){
            pintarImgs2(data.slice(54,55));
            // cancun
        }else if(destino == "Seadust Cancun Family Resort"){
            pintarImgs2(data.slice(55,56));
        }else if(destino == "Emporio Cancún"){
            pintarImgs2(data.slice(56,57));
        }else if(destino == "Cancun Bay Hotel"){
            pintarImgs2(data.slice(57,58));
        }else if(destino == "Krystal Cancun"){
            pintarImgs2(data.slice(58,59));
        }else if(destino == "Oleo Cancun Playa All Inclusive Boutique Resort"){
            pintarImgs2(data.slice(59,60));
        }else if(destino == "Grand Oasis Cancun All Inclusive"){
            pintarImgs2(data.slice(60,61));
        }else if(destino == "Riu Cancun"){
            pintarImgs2(data.slice(61,62));
        }else if(destino == "Dreams Sands Cancún Resort "){
            pintarImgs2(data.slice(62,63));
        }else if(destino == "Oasis Palm"){
            pintarImgs2(data.slice(63,64));
        }else if(destino == "Flamingo Cancun Resort"){
            pintarImgs2(data.slice(64,65));

            //Promociones
        }else if(destino == "promo-cancun-vuelo-emporio"){
            const hot = data.slice(65,66);
            pintarImgs2(data.slice(65,66),hot);
        }else if(destino == "promo-xcaret-vuelo"){
            pintarImgs2(data.slice(66,67));
        }else if(destino == "promo-vallarta-vuelo"){
            pintarImgs2(data.slice(67,68));
        }else if(destino == "promo-cid-vuelo-mazatlan"){
            pintarImgs2(data.slice(68,69));
        }else if(destino == "promo-krystal-vuelo-cancun"){
            pintarImgs2(data.slice(69,70));
        }else if(destino == "promo-playa-carmen-vuelo-cancun"){
            pintarImgs2(data.slice(70,71));
        }else if(destino == "promo-puerto-vallarta-vuelo"){
            pintarImgs2(data.slice(71,72));
        }else if(destino == "promo-puerto-vallarta-vuelo-hyatt"){
            pintarImgs2(data.slice(72,73));
        }else if(destino == "promo-puerto-vallarta-vuelo-hyatt"){
            pintarImgs2(data.slice(72,73));
        }else if(destino == "promo-princess-acapulco"){
            pintarImgs2(data.slice(73,74));  
        }else if(destino == "promo-riu-cancun-vuelo"){
            pintarImgs2(data.slice(74,75));  
        }
    
    
    
    
    
    }    




    











    const pintarImgs = (data)=>{

         
       
        data.forEach(producto => {

            templateImg.querySelector("#img1").setAttribute("src", producto.img1);
            templateImg.querySelector("#img2").setAttribute("src", producto.img2);
            templateImg.querySelector("#img3").setAttribute("src", producto.img3);
            templateImg.querySelector("#img4").setAttribute("src", producto.img4);
            templateImg.querySelector("#img5").setAttribute("src", producto.img5);
            templateImg.querySelector("#img6").setAttribute("src", producto.img6);
            templateImg.querySelector("#img7").setAttribute("src", producto.img7);
            templateImg.querySelector("#img8").setAttribute("src", producto.img8);
            templateImg.querySelector("#img9").setAttribute("src", producto.img9);
            templateImg.querySelector("#img10").setAttribute("src", producto.img10);
            templateImg.querySelector("#img11").setAttribute("src", producto.img11);
            templateImg.querySelector("#img12").setAttribute("src", producto.img12);
            templateImg.querySelector("#img13").setAttribute("src", producto.img13);
            templateImg.querySelector("#img14").setAttribute("src", producto.img14);
            templateImg.querySelector("#img15").setAttribute("src", producto.img15);
            templateImg.querySelector("#img16").setAttribute("src", producto.img16);
            templateImg.querySelector("#img17").setAttribute("src", producto.img17);
            templateImg.querySelector("#img18").setAttribute("src", producto.img18);
            templateImg.querySelector("#img19").setAttribute("src", producto.img19);
            templateImg.querySelector("#img20").setAttribute("src", producto.img20);
            
           

        const clone = templateImg.cloneNode(true);
        fragmet2.appendChild(clone);


        })


        container.appendChild(fragmet2);
       
    }

    const pintarImgs2 = (data,hot)=>{

         
       
        data.forEach(producto2 => {

       
            
        templateImg2.querySelector("#titulo-hotel").textContent = producto2.titleHotel;
        templateImg2.querySelector("#servicio-ofrece").textContent = producto2.tituloOfrece;
        templateImg2.getElementById("conoceMas").textContent = producto2.conoceMas;

        templateImg2.getElementById("li1").textContent = producto2.servLi1;
        templateImg2.getElementById("li2").textContent = producto2.servLi2;
        templateImg2.getElementById("li3").textContent = producto2.servLi3;
        templateImg2.getElementById("li4").textContent = producto2.servLi4;
        templateImg2.getElementById("li5").textContent = producto2.servLi5;

        templateImg2.querySelector("#pServicio1").textContent = producto2.servicio1;
        templateImg2.querySelector("#pServicio2").textContent = producto2.servicio2;
        templateImg2.querySelector("#pServicio3").textContent = producto2.servicio3;
        templateImg2.querySelector("#pServicio4").textContent = producto2.servicio4;

        
        templateImg2.getElementById("icono1").setAttribute("src",producto2.icono1);
        templateImg2.getElementById("icono2").setAttribute("src",producto2.icono2);
        templateImg2.getElementById("icono3").setAttribute("src",producto2.icono3);
        templateImg2.getElementById("icono4").setAttribute("src",producto2.icono4);

        
        templateImg2.getElementById("parrafo1VerMas").textContent = producto2.parrafoVerMas1;
        templateImg2.getElementById("parrafo2VerMas").textContent = producto2.parrafoVerMas2;
        templateImg2.getElementById("parrafo3VerMas").textContent = producto2.parrafoVerMas3;
       
        templateImg2.getElementById("liVerMas1").textContent = producto2.liVerMAs1;
        templateImg2.getElementById("liVerMas2").textContent = producto2.liVerMAs2;
        templateImg2.getElementById("liVerMas3").textContent = producto2.liVerMAs3;
        templateImg2.getElementById("precio").textContent = producto2.precio;



        const clone2 = templateImg2.cloneNode(true);
        fragmet3.appendChild(clone2);


        })


        container.appendChild(fragmet3);
      
       
    }






    validarPromocion=(data)=>{

        switch (destino) {
            case "promo-cancun-vuelo-emporio":
                pintarPromo(data.slice(0,1));
                break;

            case "promo-xcaret-vuelo":
                pintarPromo(data.slice(1,2));
                break;

            case "promo-vallarta-vuelo":
                pintarPromo(data.slice(2,3));
                break;


            case "promo-cid-vuelo-mazatlan":
                pintarPromo(data.slice(3,4));
                break;
            case "promo-krystal-vuelo-cancun":
                pintarPromo(data.slice(4,5));
                break;    
                

            case "promo-playa-carmen-vuelo-cancun":
                pintarPromo(data.slice(5,6));
                break
            case "promo-puerto-vallarta-vuelo":
                pintarPromo(data.slice(6,7));
                break

            case "promo-puerto-vallarta-vuelo-hyatt":
                pintarPromo(data.slice(7,8));
                break

            case "":
                pintarPromo(data.slice(6,7));
                break


                






            default:
                break;
        }

    }



    pintarPromo=(data)=>{


        data.forEach(producto2 => {

 
        templateVuelos.getElementById("promoFechasH2").textContent = producto2.promoFechasH2;
        templateVuelos.getElementById("imgPromoCalendario").setAttribute("src",producto2.imgPromoCalendario);
        templateVuelos.getElementById("imgPromoPersonas").setAttribute("src",producto2.imgPromoPersonas);
        templateVuelos.getElementById("promoPFechas").textContent = producto2.promoPFechas;
        templateVuelos.getElementById("promoPPersonas").textContent = producto2.promoPPersonas;
        templateVuelos.getElementById("promoVuelos").textContent = producto2.promoVuelos;
        templateVuelos.getElementById("imgPromoAerolinea").setAttribute("src",producto2.imgPromoAerolinea);
        templateVuelos.getElementById("aerolineaP").textContent = producto2.aerolineaP;




        const clone3 = templateVuelos.cloneNode(true);
        fragmet4.appendChild(clone3);
    
    
        })
    
    
        container.appendChild(fragmet4);

    }



    
  













   

