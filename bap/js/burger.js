const burgerButton = document.querySelector(".burger-button");
const ul = document.querySelector("nav ul");
const nav = document.querySelector("nav");
const cards = document.querySelector(".cards"); // Remplacez "content-below-nav" par la classe de votre contenu en dessous
let isMenuOpen = false;

burgerButton.addEventListener("click", () => {
    if (isMenuOpen) {
        ul.style.display = "none";
        cards.style.marginTop = "0"; // Rétablir la marge à 0 quand le menu est fermé
        isMenuOpen = false;
    } else {
        ul.style.display = "flex";
        cards.style.marginTop = "200px"; // Ajustez la marge comme nécessaire
        isMenuOpen = true;
    }
});



  
  