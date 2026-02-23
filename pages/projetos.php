<?php
$page_title = 'Projetos | Universo Down';
$base_path = '../'; // Adiciona '../' para os links de CSS/Imagens saírem da pasta pages e acharem as raízes
$current_page = 'projetos';

include '../includes/header.php';
?>

    <main>
      <!-- Hero -->
      <section class="page-hero">
        <h1>Projetos</h1>
        <p>Conheça nossas iniciativas, eventos e projetos desenvolvidos.</p>
      </section>

      <!-- Filtros -->
      <section class="section">
        <h2>Filtrar por categoria</h2>

        <div class="filters">
          <button class="filter-btn active" data-filter="all">Todos</button>
          <button class="filter-btn" data-filter="ativos">Atuais</button>
          <button class="filter-btn" data-filter="eventos">Eventos</button>
          <button class="filter-btn" data-filter="acervo">Acervo</button>
        </div>
      </section>

      <!-- Cards de Projetos -->
      <section class="section">
        <div class="cards projects">
          <article class="card project-card" data-category="ativos">
            <span class="status active">Ativo</span>
            <h3>Programa de Autonomia</h3>
            <p>Iniciativa voltada ao desenvolvimento da independência.</p>
            <button class="expand-btn">Ver detalhes</button>
            <div class="project-details">
              <p>
                Projeto contínuo com ações educativas, sociais e de preparação
                para a vida adulta.
              </p>
            </div>
          </article>

          <article class="card project-card" data-category="eventos">
            <span class="status event">Evento</span>
            <h3>Semana da Inclusão</h3>
            <p>Evento anual com palestras e atividades abertas.</p>
            <button class="expand-btn">Ver detalhes</button>
            <div class="project-details">
              <p>
                Evento institucional com foco em conscientização e participação
                comunitária.
              </p>
            </div>
          </article>

          <article class="card project-card" data-category="acervo">
            <span class="status closed">Encerrado</span>
            <h3>Projeto Cultural</h3>
            <p>Atividades artísticas e culturais.</p>
            <button class="expand-btn">Ver detalhes</button>
            <div class="project-details">
              <p>
                Projeto realizado em edições anteriores, atualmente parte do
                acervo institucional.
              </p>
            </div>
          </article>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <div class="container footer-inner">
        <div class="footer-columns">
          <div class="footer-col">
            <p><strong>Universo Down</strong></p>
            <p>
              <span class="material-symbols-outlined" aria-hidden="true"
                >location_on</span
              >
              Endereço institucional (placeholder)
            </p>
            <p>
              <span class="material-symbols-outlined" aria-hidden="true"
                >call</span
              >
              <a href="tel:+550000000000">00 0000-0000</a> •
              <a href="tel:+550000000000">00 00000-0000</a>
            </p>
            <p>
              <span class="material-symbols-outlined" aria-hidden="true"
                >mail</span
              >
              <a href="mailto:contato@universodown.org"
                >contato@universodown.org</a
              >
            </p>
          </div>

          <div class="footer-col">
            <p><strong>Horários</strong></p>
            <p>Segunda à sexta: 08h às 17h</p>
            <p>Atendimento ao público: 08h às 17h</p>
            <div class="footer-links" aria-label="Links úteis">
              <a href="#" rel="nofollow">Política de Privacidade</a>
              <a href="#" rel="nofollow">Transparência</a>
              <a href="contato.html">Contato</a>
            </div>
          </div>
        </div>

        <div>
          <a href="contato.html" class="btn-secondary">Como ajudar / Doar</a>
        </div>
      </div>
    </footer>

    <script src="../js/theme.js"></script>
    <script src="../js/components.js"></script>

    <script>
      /* Filtro de projetos */
      const filterButtons = document.querySelectorAll(".filter-btn");
      const projectCards = document.querySelectorAll(".project-card");

      filterButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          filterButtons.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");

          const filter = btn.dataset.filter;

          projectCards.forEach((card) => {
            if (filter === "all" || card.dataset.category === filter) {
              card.style.display = "block";
            } else {
              card.style.display = "none";
            }
          });
        });
      });

      /* Expansão inline */
      document.querySelectorAll(".expand-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
          btn.nextElementSibling.classList.toggle("open");
        });
      });
    </script>
  </body>
</html>
