const areaGrid = document.querySelector(".areas-grid");
const areaDetail = document.getElementById("areaDetail");

if (areaGrid && areaDetail) {
  const detailTitle = areaDetail.querySelector("[data-area-title]");
  const detailBody = areaDetail.querySelector("[data-area-body]");
  const cards = areaGrid.querySelectorAll("a.card[href^=\"#\"]");
  const sections = new Map(
    Array.from(document.querySelectorAll(".areas-details section[id]")).map(
      (section) => [section.id, section]
    )
  );

  const setActiveArea = (id) => {
    const section = sections.get(id);
    if (!section || !detailTitle || !detailBody) {
      return;
    }

    detailTitle.textContent = section.querySelector("h2")?.textContent?.trim() ?? "Detalhes da área";
    detailBody.innerHTML = "";

    Array.from(section.children).forEach((child) => {
      if (child.tagName !== "H2") {
        detailBody.appendChild(child.cloneNode(true));
      }
    });

    cards.forEach((card) => {
      const isActive = card.getAttribute("href") === `#${id}`;
      card.classList.toggle("active", isActive);
      if (isActive) {
        card.setAttribute("aria-current", "true");
      } else {
        card.removeAttribute("aria-current");
      }
    });
  };

  document.body.classList.add("areas-interactive");
  const detailsContainer = document.querySelector(".areas-details");
  if (detailsContainer) {
    detailsContainer.setAttribute("aria-hidden", "true");
  }

  cards.forEach((card) => {
    card.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = card.getAttribute("href")?.replace("#", "");
      if (!targetId) {
        return;
      }
      setActiveArea(targetId);
      history.replaceState(null, "", `#${targetId}`);
      areaDetail.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  });

  const initialId = window.location.hash.replace("#", "");
  if (initialId && sections.has(initialId)) {
    setActiveArea(initialId);
  } else if (cards.length > 0) {
    const fallbackId = cards[0].getAttribute("href")?.replace("#", "");
    if (fallbackId) {
      setActiveArea(fallbackId);
    }
  }
}
