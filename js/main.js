// main.js — comportamentos globais leves.
// (O menu mobile fica em components.js; o lightbox da página
//  "A Associação" fica em quem-somos.js.)

// Reposiciona âncoras compensando o header fixo (sticky).
(function () {
  const header = document.querySelector(".header");
  if (!header) return;
  function offsetAnchor() {
    if (location.hash && document.querySelector(location.hash)) {
      const y = document.querySelector(location.hash).getBoundingClientRect().top
              + window.pageYOffset - header.offsetHeight - 16;
      window.scrollTo({ top: y, behavior: "smooth" });
    }
  }
  document.querySelectorAll('a[href^="#"]').forEach((a) => {
    a.addEventListener("click", (e) => {
      const id = a.getAttribute("href");
      if (id.length > 1 && document.querySelector(id)) {
        e.preventDefault();
        history.pushState(null, "", id);
        offsetAnchor();
      }
    });
  });
})();
