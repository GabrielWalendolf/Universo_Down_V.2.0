// Menu mobile — alterna a classe .open na lista de navegação
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.querySelector(".nav ul");

if (menuToggle && navMenu) {
  menuToggle.addEventListener("click", (e) => {
    e.stopPropagation();
    const open = navMenu.classList.toggle("open");
    menuToggle.setAttribute("aria-expanded", open ? "true" : "false");
  });

  navMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("open");
      menuToggle.setAttribute("aria-expanded", "false");
    });
  });

  document.addEventListener("click", (event) => {
    if (!event.target.closest(".nav") && !event.target.closest("#menuToggle")) {
      navMenu.classList.remove("open");
      menuToggle.setAttribute("aria-expanded", "false");
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && navMenu.classList.contains("open")) {
      navMenu.classList.remove("open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.focus();
    }
  });
}
