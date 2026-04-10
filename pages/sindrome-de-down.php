<?php
$page_title = 'O Que é Síndrome de Down | Universo Down';
$base_path = '../';
$current_page = 'sindrome-de-down';

include '../includes/header.php';
?>

    <main>
      <!-- Hero interno -->
      <section class="page-hero">
        <div class="hero-content">
          <h1>O Que é Síndrome de Down</h1>
          <p>Informação, respeito e compreensão para uma sociedade mais inclusiva.</p>
        </div>
      </section>

      <!-- Introdução -->
      <section class="section">
        <h2>Entendendo a Síndrome de Down</h2>
        <p>
          A Síndrome de Down é uma condição genética em que a pessoa nasce com um cromossomo extra no par 21, por isso também é chamada de trissomia 21.
        </p>

        <h2>O que isso significa?</h2>
        <p>
          A presença do cromossomo extra muda como o corpo e o cérebro se desenvolvem.
        </p>
        <p>
          Cada pessoa com Down é única — não existem "graus" da síndrome e as habilidades, jeito de aprender, personalidade e características físicas variam muito de pessoa para pessoa.
        </p>
        <p>
          O desenvolvimento pode ocorrer mais lentamente, mas com intervenções precoces e acompanhamento de equipe interdisciplinar o aprendizado e a autonomia podem ser muito favorecidos.
        </p>

        <h2>Importante saber:</h2>
        <p>
          A Síndrome de Down não define a pessoa. Cada indivíduo tem potenciais, interesses e habilidades próprias.
        </p>
        <p>
          O respeito, o amor e o apoio da família e da comunidade fazem toda a diferença na vida de quem tem Down.
        </p>
      </section>

      <!-- Links úteis -->
      <section class="section">
        <h2>Links Úteis</h2>
        <ul class="links-list">
          <li>
            <a href="#" aria-label="Link externo placeholder">Organização de apoio (placeholder)</a>
          </li>
          <li>
            <a href="#" aria-label="Link externo placeholder">Material educativo (placeholder)</a>
          </li>
          <li>
            <a href="#" aria-label="Link externo placeholder">Guia para famílias (placeholder)</a>
          </li>
        </ul>
      </section>

      <!-- CTA -->
      <section class="section cta">
        <h2>Quer saber mais?</h2>
        <p>
          Entre em contato conosco para tirar dúvidas ou conhecer nossos
          projetos.
        </p>
        <a href="<?php echo $base_path; ?>pages/contato.php" class="btn-primary">Fale Conosco</a>
      </section>
    </main>

<?php include '../includes/footer.php'; ?>