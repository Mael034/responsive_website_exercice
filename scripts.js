const burgerBtn = document.getElementById("burger-btn");
const navContainer = document.getElementById("nav-container");
const nav  = document.getElementById("nav");
const ul  = document.getElementById("main-ul");

burgerBtn.onclick = ()  => {
    navContainer.classList.toggle("burgerMode");
}