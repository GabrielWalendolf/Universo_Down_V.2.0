<?php
$page_title = 'Autonomia | Universo Down';
$base_path = '../';
$current_page = 'autonomia';

include '../includes/header.php';
?>

    <main>
      <!-- Hero -->
      <section class="page-hero">
        <div class="hero-content">
          <h1>Autonomia</h1>
          <p>Construindo caminhos para independência e participação social.</p>
        </div>
      </section>

      <!-- Blocos de Autonomia -->
      <section class="section">
        <h2>Frentes de Desenvolvimento</h2>

        <div class="cards">
          <div class="card">
            <span class="material-symbols-outlined" aria-hidden="true">work</span>
            <h3>Mercado de Trabalho</h3>
            <p>
              Preparação, orientação e apoio para inserção profissional em
              ambientes inclusivos.
            </p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined" aria-hidden="true">diversity_3</span>
            <h3>Vida Social</h3>
            <p>
              Estímulo à convivência, comunicação e participação em atividades
              comunitárias.
            </p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined" aria-hidden="true">self_improvement</span>
            <h3>Independência</h3>
            <p>
              Desenvolvimento de habilidades para a vida diária e tomada de
              decisões.
            </p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined" aria-hidden="true">family_restroom</span>
            <h3>Apoio à Família</h3>
            <p>
              Orientação e fortalecimento do núcleo familiar no processo de
              autonomia.
            </p>
          </div>
        </div>
      </section>

      <!-- Depoimentos -->
      <section class="section">
        <h2>Depoimentos</h2>

        <div class="cards testimonials">
          <div class="card">
            <img src="../assets/img/placeholder.jpg" alt="Depoimento - placeholder" />
            <p>
              "A Universo Down transformou a forma como enxergamos o potencial
              de nossos filhos."
            </p>
            <strong>Familiar (placeholder)</strong>
          </div>

          <div class="card">
            <img src="../assets/img/placeholder.jpg" alt="Depoimento - placeholder" />
            <p>
              "O apoio recebido foi essencial para o desenvolvimento da
              autonomia."
            </p>
            <strong>Participante (placeholder)</strong>
          </div>

          <div class="card">
            <img src="../assets/img/placeholder.jpg" alt="Depoimento - placeholder" />
            <p>"Um trabalho sério, humano e transformador."</p>
            <strong>Parceiro (placeholder)</strong>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="section cta">
        <h2>Quer conhecer nossos projetos?</h2>
        <p>Veja as iniciativas em andamento e como participar.</p>
        <a href="<?php echo $base_path; ?>pages/projetos.php" class="btn-primary">Conheça nossos Projetos</a>
      </section>
    </main>

<?php include '../includes/footer.php'; ?>