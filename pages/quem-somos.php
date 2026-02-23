<?php
$page_title = 'Quem Somos | Universo Down';
$base_path = '../'; // Adiciona '../' para os links de CSS/Imagens saírem da pasta pages e acharem as raízes
$current_page = 'quem-somos';

include '../includes/header.php';
?>

    <main>
      <!-- Hero interno -->
      <section class="page-hero">
        <h1>Quem Somos</h1>
        <p>Uma associação comprometida com inclusão, respeito e autonomia.</p>
      </section>

      <!-- História -->
      <section class="section">
        <h2>Nossa História</h2>
        <p>
          A Associação Universo Down nasceu do desejo de famílias e
          profissionais em construir um espaço de acolhimento, desenvolvimento e
          oportunidades para pessoas com Síndrome de Down.
        </p>
        <p>
          Ao longo do tempo, a instituição ampliou suas ações, desenvolvendo
          projetos educacionais, sociais, culturais e esportivos, sempre com
          foco na autonomia e na participação ativa na sociedade.
        </p>
      </section>

      <!-- Timeline -->
      <section class="section">
        <h2>Linha do Tempo</h2>

        <ul class="timeline">
          <li>
            <span class="year">2015</span>
            <p>Início das atividades com ações de apoio às famílias.</p>
          </li>
          <li>
            <span class="year">2018</span>
            <p>Ampliação para projetos educacionais e culturais.</p>
          </li>
          <li>
            <span class="year">2021</span>
            <p>
              Criação de programas voltados à autonomia e mercado de trabalho.
            </p>
          </li>
          <li>
            <span class="year">Atual</span>
            <p>
              Atuação integrada em múltiplas áreas e fortalecimento
              institucional.
            </p>
          </li>
        </ul>
      </section>

      <!-- Missão, Visão e Valores -->
      <section class="section">
        <h2>Missão, Visão e Valores</h2>

        <div class="cards">
          <div class="card">
            <h3>Missão</h3>
            <p>
              Promover o desenvolvimento integral de pessoas com Síndrome de
              Down, fortalecendo sua autonomia e inclusão social.
            </p>
          </div>

          <div class="card">
            <h3>Visão</h3>
            <p>
              Ser referência em ações inclusivas, contribuindo para uma
              sociedade mais justa, diversa e acessível.
            </p>
          </div>

          <div class="card">
            <h3>Valores</h3>
            <p>
              Respeito à diversidade, inclusão, ética, transparência,
              compromisso social e trabalho colaborativo.
            </p>
          </div>
        </div>
      </section>

      <!-- Fotos -->
      <section class="section">
        <h2>Nosso Espaço e Atividades</h2>

        <div class="image-grid">
          <img
            src="../assets/img/placeholder.jpg"
            alt="Atividade institucional - placeholder"
          />
          <img
            src="../assets/img/placeholder.jpg"
            alt="Evento institucional - placeholder"
          />
          <img
            src="../assets/img/placeholder.jpg"
            alt="Espaço da instituição - placeholder"
          />
        </div>
      </section>

      <!-- CTA -->
      <section class="section cta">
        <h2>Quer fazer parte dessa história?</h2>
        <p>Entre em contato conosco e conheça nossas iniciativas.</p>
        <a href="contato.html" class="btn-primary">Fale Conosco</a>
      </section>
    </main>

<?php include '../includes/footer.php'; ?>
