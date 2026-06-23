<?php
$page_title       = 'Associação | Universo Down';
$meta_description = 'Conheça a história, a missão e os espaços da Universo Down — associação de Joinville/SC dedicada à inclusão de pessoas com Síndrome de Down.';
$base_path        = '../';
$current_page     = 'quem-somos';

include '../includes/header.php';
?>

  <!-- Page hero -->
  <section class="page-hero">
    <span class="blob blob--teal" style="width:220px;height:220px;right:-50px;top:-50px;"></span>
    <div class="container">
      <span class="eyebrow eyebrow--onnavy">Quem somos</span>
      <h1>Associação</h1>
      <p>Uma associação comprometida com inclusão, respeito e autonomia para pessoas com Síndrome de Down.</p>
    </div>
  </section>

  <!-- História -->
  <section class="band">
    <div class="container split">
      <div>
        <span class="eyebrow">Nossa história</span>
        <h2 style="margin-bottom:18px;">Nascemos do desejo de acolher.</h2>
        <p>A Associação Universo Down nasceu do desejo de famílias e profissionais em construir um espaço de acolhimento, desenvolvimento e oportunidades para pessoas com Síndrome de Down.</p>
        <p>Ao longo do tempo, ampliamos nossas ações, desenvolvendo projetos educacionais, sociais, culturais e esportivos, sempre com foco na autonomia e na participação ativa na sociedade.</p>
      </div>
      <div class="photo">
        <img src="<?php echo $base_path; ?>assets/img/espacos/EP.jpg" alt="Sala de estimulação precoce" loading="lazy" />
      </div>
    </div>
  </section>

  <!-- Linha do tempo -->
  <section class="band band--tint">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow eyebrow--onwhite">Linha do tempo</span>
        <h2>Uma trajetória de conquistas</h2>
      </div>
      <ul class="timeline" role="list">
        <li><span class="year">1990</span><p>Nasceu a Universo Down.</p></li>
        <li><span class="year">2021</span><p>Celebrado convênio com a FCEE.</p></li>
        <li><span class="year">2024</span><p>Nova sede.</p></li>
        <li><span class="year">Hoje</span><p>Atuação integrada em múltiplas áreas e fortalecimento institucional.</p></li>
      </ul>
    </div>
  </section>

  <!-- Missão, Visão e Valores -->
  <section class="band">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">No que acreditamos</span>
        <h2>Missão, visão e valores</h2>
      </div>
      <div class="grid grid-3">
        <div class="card card--navy card--pad-lg card-hover">
          <div class="badge badge--ghost"><span class="material-symbols-outlined">star</span></div>
          <h3 style="margin-bottom:10px;">Missão</h3>
          <p>Promover e articular ações de defesa de direitos e prevenção, orientações, prestação de serviços, apoio à família, direcionadas à melhoria da qualidade de vida da pessoa com deficiência e à construção de uma sociedade justa e solidária.</p>
        </div>
        <div class="card card--teal card--pad-lg card-hover">
          <div class="badge badge--ghost"><span class="material-symbols-outlined">visibility</span></div>
          <h3 style="margin-bottom:10px;">Visão</h3>
          <p>Tornar-se referência em tratamento a pessoas com Trissomia 21, no Brasil.</p>
        </div>
        <div class="card card--pad-lg card-hover">
          <div class="badge badge--soft-orange"><span class="material-symbols-outlined">favorite</span></div>
          <h3 style="margin-bottom:10px;">Valores</h3>
          <p style="color:var(--muted);">Oferecer estrutura e profissionais capacitados para realizar com excelência os tratamentos oferecidos, promovendo o desenvolvimento pessoal, a inclusão e autonomia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Galeria de espaços -->
  <section class="band band--tint">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow eyebrow--onwhite">Nosso espaço</span>
        <h2>Salas e atividades</h2>
      </div>
      <div class="image-grid">
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/EP.jpg" alt="Sala de Pedagogia EP" loading="lazy" /><figcaption>Pedagogia EP</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/pedagogia_SAE.jpeg" alt="Sala de Pedagogia SAE" loading="lazy" /><figcaption>Pedagogia SAE</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/pedagogia_AEE.jpeg" alt="Sala de Pedagogia AEE" loading="lazy" /><figcaption>Pedagogia AEE</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/artes.jpg" alt="Sala de Arteterapia" loading="lazy" /><figcaption>Arteterapia</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/pscicologia.jpeg" alt="Sala de Psicologia" loading="lazy" /><figcaption>Psicologia</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/terapia_ocupacional.jpeg" alt="Sala de Terapia Ocupacional" loading="lazy" /><figcaption>Terapia Ocupacional</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/edu_fisica.jpeg" alt="Sala de Educação Física" loading="lazy" /><figcaption>Educação Física</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/fonoaudiologia.jpeg" alt="Sala de Fonoaudiologia" loading="lazy" /><figcaption>Fonoaudiologia</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/fisioterapia.jpeg" alt="Sala de Fisioterapia" loading="lazy" /><figcaption>Fisioterapia</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/informatica.jpeg" alt="Sala de Informática" loading="lazy" /><figcaption>Informática</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/multisensorial.jpeg" alt="Sala Multissensorial" loading="lazy" /><figcaption>Multissensorial</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/musica.jpeg" alt="Sala de Música" loading="lazy" /><figcaption>Música</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/psicopedagogia.jpeg" alt="Sala de Psicopedagogia" loading="lazy" /><figcaption>Psicopedagogia</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/playground.jpeg" alt="Playground" loading="lazy" /><figcaption>Playground</figcaption></figure>
        <figure class="image-grid-item"><img src="<?php echo $base_path; ?>assets/img/espacos/mini_cidade.jpeg" alt="Mini Cidade" loading="lazy" /><figcaption>Mini Cidade</figcaption></figure>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="band band--navy cta-band">
    <span class="blob blob--teal" style="width:180px;height:180px;left:-40px;bottom:-40px;"></span>
    <div class="container">
      <h2>Quer fazer parte dessa história?</h2>
      <p style="font-size:17px;">Entre em contato e conheça de perto nossas iniciativas.</p>
      <a class="btn btn--orange btn--lg" href="<?php echo $base_path; ?>pages/contato.php">Fale conosco</a>
    </div>
  </section>

  <!-- Lightbox -->
  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Visualizar imagem ampliada">
    <button class="lightbox-close" id="lightboxClose" aria-label="Fechar">&times;</button>
    <img class="lightbox-img" id="lightboxImg" src="" alt="" />
    <p class="lightbox-caption" id="lightboxCaption"></p>
  </div>

<?php
$extra_scripts = ['js/quem-somos.js'];
include '../includes/footer.php';
?>
