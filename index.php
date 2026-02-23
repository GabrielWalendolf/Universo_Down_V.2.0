<?php
// Configurações da página atual
$page_title = 'Universo Down | Inclusão, Autonomia e Desenvolvimento';
$base_path = ''; // Deixe vazio pois o index está na raiz
$current_page = 'home'; // Define qual aba fica com a classe "active"

// Inclui o topo
include 'includes/header.php';
?>

    <!-- Hero -->
    <section class="hero">
      <div class="hero-content">
        <h1>Inclusão, Autonomia e Respeito</h1>
        <p>Construindo oportunidades para pessoas com Síndrome de Down.</p>
        <a href="pages/quem-somos.html" class="btn-primary"
          >Conheça a Universo Down</a
        >
      </div>
    </section>

    <!-- Destaques -->
    <section class="section">
      <h2>Acontecendo Agora</h2>
      <div class="cards">
        <article class="card">
          <span class="tag">Evento</span>
          <h3>Semana da Inclusão</h3>
          <p>Atividades educativas e culturais abertas à comunidade.</p>
          <a href="pages/projetos.html">Leia mais</a>
        </article>
        <article class="card">
          <span class="tag">Ativo</span>
          <h3>Programa de Autonomia</h3>
          <p>Formação para vida social e mercado de trabalho.</p>
          <a href="pages/autonomia.html">Leia mais</a>
        </article>
        <article class="card">
          <span class="tag">Projeto</span>
          <h3>Clube de Mães</h3>
          <p>Espaço de troca, apoio e fortalecimento.</p>
          <a href="pages/areas.html#clube-maes">Leia mais</a>
        </article>
      </div>
    </section>

    <!-- Missão -->
    <section class="section">
      <h2>Nossa Missão</h2>
      <p>
        Promover inclusão, desenvolvimento e autonomia de pessoas com Síndrome
        de Down, fortalecendo famílias e construindo uma sociedade mais justa.
      </p>
    </section>

    <!-- Áreas -->
    <section class="section">
      <h2>Áreas de Atuação</h2>
      <div class="cards areas">
        <a href="<?php echo $base_path; ?>pages/areas.php#ep" class="card">EP</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#aee" class="card">AEE</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#sae" class="card">SAE</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#clube-maes" class="card">Clube de Mães</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#esporte" class="card">Esporte</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#cultura" class="card">Cultura</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#clube-livros" class="card">Clube do Livro</a>
        <a href="<?php echo $base_path; ?>pages/areas.php#meio-ambiente-sustentabilidade" class="card">Meio Ambiente & sustentabilidade</a>

      </div>
    </section>

    <!-- Parceiros -->
    <section class="section">
      <h2>Parceiros</h2>
      <div class="partners-grid">
        <img src="assets/img/placeholder.jpg" alt="Parceiro" />
        <img src="assets/img/placeholder.jpg" alt="Parceiro" />
        <img src="assets/img/placeholder.jpg" alt="Parceiro" />
      </div>
    </section>

    <?php
// Inclui o rodapé
include 'includes/footer.php';
?>