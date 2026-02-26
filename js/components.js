// Menu mobile - DESABILITADO (nav-bar horizontal permanente)

// Cookie banner
const banner = document.getElementById("cookieBanner");
if (!localStorage.getItem("cookies")) {
  banner.style.display = "flex";
}
document.getElementById("acceptCookies")?.addEventListener("click", () => {
  localStorage.setItem("cookies", "accepted");
  banner.style.display = "none";
});
