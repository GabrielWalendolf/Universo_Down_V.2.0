<?php
$page_title       = 'Transparência | Universo Down';
$meta_description = 'Acesse documentos, balanços financeiros, atas e certidões da Universo Down. Transparência e prestação de contas.';
$base_path        = '../';
$current_page     = 'transparencia';
$hero_image       = 'assets/img/hero/transparencia.png';
include '../includes/header.php';
?>
    <main>
      <section class="page-hero"<?php echo hero_style(); ?>>
        <div class="hero-content">
          <h1>Transparência</h1>
          <p>Você por dentro de tudo.</p>
        </div>
      </section>

      <section class="section">
        <p>
          O Universo Down preza pela transparência, por isso compartilha seus documentos
          e balanços financeiros periodicamente. Selecione a informação que deseja conferir
          e acesse a pasta correspondente.
        </p>

        <div class="cards transparency-cards">
          <div class="card">
            <i class="fi fi-sr-bank" aria-hidden="true"></i>
            <h3>Balanço Financeiro</h3>
            <a
              href="https://drive.google.com/drive/folders/1KiqDgCFASnw2Ku8bcOcmnE_dwl0z0DEr"
              class="btn-primary"
              target="_blank"
              rel="noopener noreferrer"
            >
              Acessar pasta
            </a>
          </div>

          <div class="card">
            <i class="fi fi-sr-document" aria-hidden="true"></i>
            <h3>Atas</h3>
            <a
              href="https://drive.google.com/drive/folders/1jToot_eW-FH23iD5Xgz7fg4SljOiFxIp"
              class="btn-primary"
              target="_blank"
              rel="noopener noreferrer"
            >
              Acessar pasta
            </a>
          </div>

          <div class="card">
            <i class="fi fi-sr-badge-check" aria-hidden="true"></i>
            <h3>Certidões</h3>
            <a
              href="https://drive.google.com/drive/folders/1-zzmaJ2stvk4iRXTq52UuVxs1UbV26Fe"
              class="btn-primary"
              target="_blank"
              rel="noopener noreferrer"
            >
              Acessar pasta
            </a>
          </div>
        </div>
      </section>
    </main>

<?php include '../includes/footer.php'; ?>
