// Partners carousel — infinite scroll + wheel + drag
const partnersCarousel = document.querySelector('.partners-carousel');
if (partnersCarousel) {
  const track = partnersCarousel.querySelector('.partners-track');

  // Duplica os itens para criar o loop infinito
  Array.from(track.querySelectorAll('.partner-item')).forEach(item =>
    track.appendChild(item.cloneNode(true))
  );

  let offset = 0;
  let userInteracting = false;
  let resumeTimer;
  let drag = null;
  let touch = null;

  const setWidth = () => track.scrollWidth / 2;

  const normalize = () => {
    const sw = setWidth();
    if (sw > 0) offset = ((offset % sw) + sw) % sw;
  };

  const pauseAutoScroll = (ms = 2000) => {
    userInteracting = true;
    clearTimeout(resumeTimer);
    resumeTimer = setTimeout(() => { userInteracting = false; }, ms);
  };

  (function tick() {
    if (!userInteracting) offset += 0.5;
    normalize();
    track.style.transform = `translateX(-${offset}px)`;
    requestAnimationFrame(tick);
  })();

  partnersCarousel.addEventListener('wheel', (e) => {
    e.preventDefault();
    offset += e.deltaY !== 0 ? e.deltaY : e.deltaX;
    pauseAutoScroll();
  }, { passive: false });

  partnersCarousel.addEventListener('mousedown', (e) => {
    drag = { x: e.pageX, start: offset };
    partnersCarousel.classList.add('is-dragging');
    pauseAutoScroll(3000);
    e.preventDefault();
  });

  document.addEventListener('mousemove', (e) => {
    if (!drag) return;
    offset = drag.start - (e.pageX - drag.x);
  });

  document.addEventListener('mouseup', () => {
    if (!drag) return;
    drag = null;
    partnersCarousel.classList.remove('is-dragging');
    pauseAutoScroll();
  });

  partnersCarousel.addEventListener('touchstart', (e) => {
    touch = { x: e.touches[0].pageX, start: offset };
    pauseAutoScroll(3000);
  }, { passive: true });

  partnersCarousel.addEventListener('touchmove', (e) => {
    if (!touch) return;
    offset = touch.start - (e.touches[0].pageX - touch.x);
  }, { passive: true });

  partnersCarousel.addEventListener('touchend', () => {
    touch = null;
    pauseAutoScroll();
  }, { passive: true });
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
