// Partners carousel — wheel scroll + drag
const partnersCarousel = document.querySelector('.partners-carousel');
if (partnersCarousel) {
  partnersCarousel.addEventListener('wheel', (e) => {
    e.preventDefault();
    partnersCarousel.scrollLeft += e.deltaY !== 0 ? e.deltaY : e.deltaX;
  }, { passive: false });

  let dragStart = null;

  partnersCarousel.addEventListener('mousedown', (e) => {
    dragStart = { x: e.pageX, scrollLeft: partnersCarousel.scrollLeft };
    partnersCarousel.classList.add('is-dragging');
    e.preventDefault();
  });

  document.addEventListener('mousemove', (e) => {
    if (!dragStart) return;
    partnersCarousel.scrollLeft = dragStart.scrollLeft - (e.pageX - dragStart.x) * 1.2;
  });

  document.addEventListener('mouseup', () => {
    dragStart = null;
    partnersCarousel.classList.remove('is-dragging');
  });

  let touchStart = null;

  partnersCarousel.addEventListener('touchstart', (e) => {
    touchStart = { x: e.touches[0].pageX, scrollLeft: partnersCarousel.scrollLeft };
  }, { passive: true });

  partnersCarousel.addEventListener('touchmove', (e) => {
    if (!touchStart) return;
    partnersCarousel.scrollLeft = touchStart.scrollLeft - (e.touches[0].pageX - touchStart.x);
  }, { passive: true });

  partnersCarousel.addEventListener('touchend', () => { touchStart = null; }, { passive: true });
}

// Header scroll shadow
const header = document.querySelector('.header');
if (header) {
  const updateHeader = () => header.classList.toggle('scrolled', window.scrollY > 8);
  window.addEventListener('scroll', updateHeader, { passive: true });
}

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
