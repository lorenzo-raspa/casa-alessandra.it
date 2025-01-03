const header = document.querySelector("header");
const navbar = document.querySelector("navbar");
const toggleBox = document.querySelector(".toggle-navbar-box");

// total web page height, including elements beyond viewport
const totalHeight = document.documentElement.scrollHeight || document.body.scrollHeight;

// total web page height


toggleBox.addEventListener("click", toggleClass);

function toggleClass(){
    header.classList.toggle("fixed-header");
    navbar.classList.toggle("show-navbar");
    toggleBox.classList.toggle("rotate-spans");
    navbar.style.position = "fixed";
}