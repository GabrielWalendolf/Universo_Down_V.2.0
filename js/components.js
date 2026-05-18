// Menu mobile
const menuToggle = document.getElementById("menuToggle");
const navMenu = document.querySelector("nav ul");

if (menuToggle && navMenu) {
  menuToggle.addEventListener("click", () => {
    navMenu.classList.toggle("open");
  });

  // Fechar menu ao clicar em um link
  navMenu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("open");
    });
  });

  // Fechar menu ao clicar fora
  document.addEventListener("click", (event) => {
    if (!event.target.closest("nav") && !event.target.closest("#menuToggle")) {
      navMenu.classList.remove("open");
    }
  });

  // Fechar menu ao pressionar ESC
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && navMenu.classList.contains("open")) {
      navMenu.classList.remove("open");
      menuToggle.focus();
    }
  });
}
