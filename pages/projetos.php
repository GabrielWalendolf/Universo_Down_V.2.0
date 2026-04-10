<?php
$page_title = 'Projetos | Universo Down';
$base_path = '../';
$current_page = 'projetos';

include '../includes/header.php';
?>

    <main>
      <!-- Hero -->
      <section class="page-hero">
        <div class="hero-content">
          <h1>Projetos</h1>
          <p>Conheça nossas iniciativas, eventos e projetos desenvolvidos.</p>
        </div>
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

<?php include '../includes/footer.php'; ?>