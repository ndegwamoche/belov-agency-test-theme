//cloase and open mobile menu
const mobileMenu = document.querySelector(".mobile-menu-container");
const mobileMenuBtn = document.querySelector(".menu-icon");
const closeMenuBtn = document.querySelector(".close-icon");

closeMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
});

mobileMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("active");
});