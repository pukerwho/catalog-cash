// Open mobile menu
let menuToggleOpen = document.querySelector(".menu-toggle-open");
let menuToggleClose = document.querySelector(".menu-toggle-close");
if (menuToggleOpen) {
  menuToggleOpen.addEventListener("click", () => {
    document.body.classList.add("menu-open");
  });
}
if (menuToggleClose) {
  menuToggleClose.addEventListener("click", () => {
    document.body.classList.remove("menu-open");
  });
}