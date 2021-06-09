// Declarar constantes 

const templateCard = document.getElementById("template-card").content;
const items = document.getElementById("items");
const fragmet = document.createDocumentFragment();




// esperar evento el cual espear a que cargue todo el DOM y llamamos la funcion 

document.addEventListener("DOMContentLoaded", () => {
   



  
 fetchData();

 


});


items.addEventListener("click",(e)=>{

 console.log("click");
});


// funcion fetchData




const fetchData = async () =>{
try{
    const res = await fetch('../js/api.json');
    // todos los datos del json
    const dataGlobal = await res.json();
    //datos de Hoteles
    
    nuevaFuncion(dataGlobal);
  

}catch{
    console.log(error);
}

}



// funcion pintar y clonar cards



const pintarCards = (data) => {

// console.log(data);
 data.forEach(producto => {

    templateCard.querySelector("#h2").textContent = producto.titleHotel;
    templateCard.querySelector("p").textContent = producto.saliendoDe;
    templateCard.querySelector("img").setAttribute("src", producto.thumbnailUrl);
    templateCard.querySelector("#p2").textContent = producto.precioPor;
    templateCard.querySelector("h4").textContent = producto.moneda;
    templateCard.querySelector("h5").textContent = producto.precio;
    templateCard.querySelector("#a").setAttribute("href", producto.href);
    // templateCard.querySelector(".btn-dark").dataset.id = producto.id;
    const clone = templateCard.cloneNode(true);
    fragmet.appendChild(clone);

 

 })


items.appendChild(fragmet);


}



    











const nuevaFuncion = (data) =>{



    

if(destino == "cdmx"){
    pintarCards(data.slice(0,9));  
}else if(destino == "cabos"){
    pintarCards(data.slice(10,17));
}else if(destino == "acapulco"){
    pintarCards(data.slice(17,27));
}else if(destino == "ptoVallarta"){
    pintarCards(data.slice(27,36));
}else if(destino == "playaCarmen"){
    pintarCards(data.slice(36,46));
}else if(destino == "mazatlan"){
    pintarCards(data.slice(46,56));
}else if(destino == "cancun"){
    pintarCards(data.slice(56,67));
}







}