<?php
$page_title       = 'Transparência | Universo Down';
$meta_description = 'Acesse documentos, balanços financeiros, atas e certidões da Universo Down. Transparência e prestação de contas com a comunidade.';
$base_path        = '../';
$current_page     = 'transparencia';

include '../includes/header.php';
?>

  <!-- Page hero -->
  <section class="page-hero">
    <span class="blob blob--teal" style="width:220px;height:220px;right:-50px;top:-50px;"></span>
    <div class="container">
      <span class="eyebrow eyebrow--onnavy">Prestação de contas</span>
      <h1>Transparência</h1>
      <p>Você por dentro de tudo. Confiança se constrói com clareza.</p>
    </div>
  </section>

  <!-- Intro -->
  <section class="band band--tight" style="padding-bottom:0;">
    <div class="container" style="text-align:center;">
      <p style="font-size:17px;line-height:1.7;max-width:740px;margin-inline:auto;">O Universo Down preza pela transparência e compartilha seus documentos e balanços financeiros periodicamente. Selecione a informação que deseja conferir e acesse a pasta correspondente.</p>
    </div>
  </section>

  <!-- Documentos -->
  <section class="band band--tight">
    <div class="container grid grid-3">
      <div class="card doc-card card-hover">
        <div class="badge badge--soft-teal"><span class="material-symbols-outlined">account_balance</span></div>
        <h3>Balanço Financeiro</h3>
        <p>Demonstrativos de receitas e despesas da associação.</p>
        <a class="btn btn--navy" href="https://drive.google.com/drive/folders/1KiqDgCFASnw2Ku8bcOcmnE_dwl0z0DEr" target="_blank" rel="noopener noreferrer">Acessar pasta</a>
      </div>
      <div class="card doc-card card-hover">
        <div class="badge badge--soft-orange"><span class="material-symbols-outlined">description</span></div>
        <h3>Atas e Estatuto</h3>
        <p>Registros de assembleias, reuniões da diretoria e estatuto da associação.</p>
        <a class="btn btn--navy" href="https://drive.google.com/drive/folders/1jToot_eW-FH23iD5Xgz7fg4SljOiFxIp" target="_blank" rel="noopener noreferrer">Acessar pasta</a>
      </div>
      <div class="card doc-card card-hover">
        <div class="badge badge--soft-teal"><span class="material-symbols-outlined">verified</span></div>
        <h3>Certidões</h3>
        <p>Documentos legais que comprovam nossa regularidade.</p>
        <a class="btn btn--navy" href="https://drive.google.com/drive/folders/1-zzmaJ2stvk4iRXTq52UuVxs1UbV26Fe" target="_blank" rel="noopener noreferrer">Acessar pasta</a>
      </div>
    </div>
  </section>

  <!-- Faixa de confiança -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container">
      <div class="trust">
        <div><b>100%</b><span>dos recursos aplicados nos atendimentos</span></div>
        <div><b>Anual</b><span>publicação do balanço financeiro</span></div>
        <div><b>Aberto</b><span>acesso a documentos para toda a comunidade</span></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="band cta-band" style="padding-top:0;">
    <div class="container">
      <h2>Ficou com alguma dúvida?</h2>
      <p>Nossa equipe está à disposição para esclarecer qualquer informação.</p>
      <a class="btn btn--orange btn--lg" href="<?php echo $base_path; ?>pages/contato.php">Fale conosco</a>
    </div>
  </section>

<?php include '../includes/footer.php'; ?>
