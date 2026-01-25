// Menu mobile
document.getElementById("menuToggle")?.addEventListener("click", () => {
  document.querySelector("nav ul").classList.toggle("open");
});

// Cookie banner
const banner = document.getElementById("cookieBanner");
if (!localStorage.getItem("cookies")) {
  banner.style.display = "flex";
}
document.getElementById("acceptCookies")?.addEventListener("click", () => {
  localStorage.setItem("cookies", "accepted");
  banner.style.display = "none";
});
