
// recupero il lightbox e la lightbox image
const lightbox = document.getElementById("lightbox")
const lightboxImage = document.getElementById("lightbox-image")

// recupero tutti i gallery-item
let galleryItems = document.getElementsByClassName("gallery-item");

// rende visibile il light box
function openLightbox(imageIndex, imagePath){
    lightbox.style.display = "flex";
    lightboxImage.setAttribute("src", imagePath);
    console.log(imageIndex, imagePath);
}

// chiude il lightbox se clicco fuori dall'immagine
lightbox.addEventListener("click", (e) => {
    if (e.target.tagName !== "IMG") lightbox.style.display = "none";
  });
  
// apro il lightbox quando clicco su una immagine, inviando il data index e il percorso dell'immagine stessa
for(let i = 0; i <= galleryItems.length; i++){
    galleryItems[i].addEventListener("click", (e)=>{

        // prendo l'indice e lo mando alla funzione per l'apertura del modal
        let index =  galleryItems[i].dataset.index;
        let path = e.target.src;
        openLightbox(index, path);
    });
}



