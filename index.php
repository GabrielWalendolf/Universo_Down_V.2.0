<?php
$page_title       = 'Universo Down | Inclusão, Autonomia e Desenvolvimento';
$meta_description = 'A Universo Down promove inclusão, autonomia e desenvolvimento para crianças e jovens com Síndrome de Down em Joinville/SC. Conheça nossas áreas e apoie.';
$base_path        = '';
$current_page     = 'home';

include 'includes/header.php';
?>

  <!-- Hero -->
  <section class="hero">
    <span class="blob blob--teal" style="width:300px;height:300px;right:-90px;top:-90px;"></span>
    <span class="blob blob--yellow" style="width:140px;height:140px;left:42%;bottom:-60px;"></span>
    <div class="container hero-grid">
      <div>
        <span class="eyebrow">Associação de síndrome de Down de Joinville</span>
        <h1>Aqui somos todos estrelas</h1>
        <p class="hero-lead">Oferecemos atendimento especializado a pessoas com síndrome de Down, promovendo a inclusão e contribuindo para um mundo mais igualitário.</p>
        <div class="hero-actions">
          <a class="btn btn--orange btn--lg" href="pages/contato.php#doar">Quero ajudar</a>
          <a class="btn btn--navy btn--lg" href="pages/areas.php">Conheça as áreas</a>
        </div>
      </div>
      <div class="hero-figure">
        <div class="photo">
          <img src="assets/img/areas/ep.jpeg" alt="Estimulação precoce na Universo Down" loading="lazy" />
        </div>
        <div class="hero-badge"><b>+200</b><span>famílias acolhidas</span></div>
      </div>
    </div>
  </section>

  <!-- Missão -->
  <section class="band band--navy mission">
    <span class="blob blob--teal-2" style="width:54px;height:54px;left:46px;top:32px;"></span>
    <span class="blob blob--teal" style="width:84px;height:84px;right:64px;bottom:26px;"></span>
    <div class="container">
      <span class="eyebrow eyebrow--onnavy">Nossa missão</span>
      <p>Promover inclusão, desenvolvimento e autonomia de pessoas com Síndrome de Down, fortalecendo famílias e construindo uma sociedade mais justa.</p>
    </div>
  </section>

  <!-- Impacto -->
  <section class="band band--tight">
    <div class="container grid grid-4">
      <div class="stat"><b>+30</b><span>anos de atuação</span></div>
      <div class="stat"><b>+200</b><span>famílias acompanhadas</span></div>
      <div class="stat"><b>15</b><span>modalidades terapêuticas</span></div>
      <div class="stat"><b>100%</b><span>gratuito às famílias</span></div>
    </div>
  </section>

  <!-- ODS -->
  <section class="band band--tight band--tint">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Compromisso global</span>
        <h2>Alinhados aos ODS da ONU</h2>
        <p>Atuamos em sintonia com os Objetivos de Desenvolvimento Sustentável.</p>
      </div>
      <div class="grid grid-4">
        <div class="card ods-item card-hover" style="padding:22px;"><img src="<?php echo $base_path; ?>assets/img/ods/ods_3.png" alt="ODS 3" loading="lazy" /><div><b>ODS 3</b><span>Saúde e Bem-Estar</span></div></div>
        <div class="card ods-item card-hover" style="padding:22px;"><img src="<?php echo $base_path; ?>assets/img/ods/ods_4.jpg" alt="ODS 4" loading="lazy" /><div><b>ODS 4</b><span>Educação de Qualidade</span></div></div>
        <div class="card ods-item card-hover" style="padding:22px;"><img src="<?php echo $base_path; ?>assets/img/ods/ods_8.png" alt="ODS 8" loading="lazy" /><div><b>ODS 8</b><span>Trabalho Decente</span></div></div>
        <div class="card ods-item card-hover" style="padding:22px;"><img src="<?php echo $base_path; ?>assets/img/ods/ods_11.png" alt="ODS 11" loading="lazy" /><div><b>ODS 11</b><span>Cidades Sustentáveis</span></div></div>
      </div>
    </div>
  </section>

  <!-- Áreas -->
  <section class="band band--tight">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">O que fazemos</span>
        <h2>Nossas modalidades terapêuticas</h2>
      </div>
      <div class="grid grid-3">
        <a class="card card-hover" href="pages/areas.php#ep" style="text-decoration:none;">
          <div class="badge badge--navy">EP</div>
          <h3>Pedagogia EP</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Acompanhamento pedagógico especializado dos 6 meses até os 6 anos, fase decisiva para o desenvolvimento.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#aee" style="text-decoration:none;">
          <div class="badge badge--teal">AEE</div>
          <h3>Pedagogia AEE</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Apoio pedagógico especializado que complementa a vida escolar de cada criança e adolescente.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#sae" style="text-decoration:none;">
          <div class="badge badge--orange">SAE</div>
          <h3>Pedagogia SAE</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Serviço de atendimento especializado para adultos a partir dos 18 anos, focado em autonomia e inclusão.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#arteterapia" style="text-decoration:none;">
          <div class="badge badge--blue"><span class="material-symbols-outlined">palette</span></div>
          <h3>Arteterapia</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Arte como ferramenta terapêutica para expressão emocional, criatividade e desenvolvimento.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#psicologia" style="text-decoration:none;">
          <div class="badge badge--soft-orange"><span class="material-symbols-outlined">psychology</span></div>
          <h3>Psicologia</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Acompanhamento psicológico individual e suporte emocional para associados e famílias.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#assistencia-social" style="text-decoration:none;">
          <div class="badge badge--tealdeep"><span class="material-symbols-outlined">groups</span></div>
          <h3>Assistência Social</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Orientação e acesso a direitos, benefícios e serviços sociais para as famílias atendidas.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#to" style="text-decoration:none;">
          <div class="badge badge--teal"><span class="material-symbols-outlined">accessibility_new</span></div>
          <h3>Terapia Ocupacional</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Desenvolvimento da independência nas atividades do dia a dia e integração sensorial.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#ed-fisica" style="text-decoration:none;">
          <div class="badge badge--yellow"><span class="material-symbols-outlined">sports_soccer</span></div>
          <h3>Educação Física</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Atividades físicas que promovem saúde, coordenação, autoestima e convivência.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#fono" style="text-decoration:none;">
          <div class="badge badge--navy"><span class="material-symbols-outlined">record_voice_over</span></div>
          <h3>Fonoaudiologia</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Comunicação, linguagem e musculatura orofacial — base para o desenvolvimento global.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#fisio" style="text-decoration:none;">
          <div class="badge badge--orange"><span class="material-symbols-outlined">self_improvement</span></div>
          <h3>Fisioterapia</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Força, equilíbrio e coordenação motora para uma vida com mais mobilidade e independência.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#informatica" style="text-decoration:none;">
          <div class="badge badge--blue"><span class="material-symbols-outlined">computer</span></div>
          <h3>Imersão Digital</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Inclusão digital e desenvolvimento de habilidades tecnológicas para o mundo contemporâneo.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#snoezelen" style="text-decoration:none;">
          <div class="badge badge--tealdeep"><span class="material-symbols-outlined">lightbulb</span></div>
          <h3>Multissensorial</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Sala multissensorial com estímulos de luz, som e tato para organização sensorial e bem-estar.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#musica" style="text-decoration:none;">
          <div class="badge badge--blue"><span class="material-symbols-outlined">music_note</span></div>
          <h3>Música</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Ritmo, expressão e vínculo — a música como caminho de comunicação e identidade.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#psicopedagogia" style="text-decoration:none;">
          <div class="badge badge--soft-orange"><span class="material-symbols-outlined">school</span></div>
          <h3>Psicopedagogia</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Apoio especializado nas dificuldades de aprendizagem e no desenvolvimento cognitivo.</p>
        </a>
        <a class="card card-hover" href="pages/areas.php#avds" style="text-decoration:none;">
          <div class="badge badge--navy"><span class="material-symbols-outlined">home</span></div>
          <h3>Laboratórios Funcionais</h3>
          <p style="color:var(--muted);font-size:14.5px;margin-top:8px;">Com apoio Pedagógico e T.O — habilidades práticas para maior autonomia e independência.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Parceiros -->
  <section class="band band--tint">
    <div class="container">
      <div class="section-head">
        <h2>Nossas atividades são viabilizadas pelo apoio e pelos recursos recebidos das seguintes instituições e órgãos parceiros.</h2>
      </div>
      <div class="grid grid-4">
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/fcee.png" alt="FCEE – Fundação Catarinense de Educação Especial" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/govsc.png" alt="Governo do Estado de Santa Catarina" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/prefeitura.png" alt="Prefeitura de Joinville" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/fmas.png" alt="FMAS – Fundo Municipal de Assistência Social" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/fia.png" alt="FIA – Fundo da Infância e Adolescência" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/cmdca.png" alt="CMDCA – Conselho Municipal dos Direitos da Criança e do Adolescente" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/comde.png" alt="COMDE – Conselho Municipal dos Direitos das Pessoas com Deficiência" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
        <figure class="photo partner-logo-card" style="height:160px;display:flex;align-items:center;justify-content:center;background:var(--surface);border:1px solid var(--border);padding:16px;">
          <img src="assets/img/empresas_parceiras/cmas.png" alt="CMAS – Conselho Municipal de Assistência Social" loading="lazy" style="width:75%;max-height:110px;object-fit:contain;" />
        </figure>
      </div>
    </div>
  </section>

  <!-- Doação -->
  <section class="band band--navy">
    <span class="blob blob--teal" style="width:220px;height:220px;right:-50px;top:-50px;"></span>
    <div class="container donate-grid">
      <div>
        <span class="eyebrow eyebrow--onnavy is-yellow">Faça parte</span>
        <h2 style="margin-bottom:16px;">Sua doação transforma histórias.</h2>
        <p style="font-size:17px;max-width:480px;margin-bottom:26px;">Com qualquer valor você ajuda a manter atendimentos 100% gratuitos para dezenas de famílias. Doe pelo Pix, uma vez ou todo mês.</p>
        <div class="hero-actions">
          <a class="btn btn--orange btn--lg" href="pages/contato.php#doar">Doar com Pix</a>
          <a class="btn btn--ghost btn--lg" href="pages/contato.php">Fale conosco</a>
        </div>
      </div>
      <div class="donate-card">
        <img class="qr-img" src="assets/img/qrcode/QRcode_associacao.jpeg" alt="QR Code para doação via Pix" />
        <div style="font-weight:800;font-size:15px;margin-bottom:4px;">Pix · CNPJ</div>
        <div style="font-size:13.5px;font-weight:600;color:var(--muted);">81.144.099/0001-05</div>
      </div>
    </div>
  </section>

  <!-- Parceiros -->
  <section class="band band--tight partners">
    <div class="container">
      <p class="partners-label">Empresas que apoiam a Universo Down</p>
      <div class="partners-carousel">
      <div class="partners-track">
        <img src="assets/img/empresas_parceiras/bosch.png" alt="Bosch" loading="lazy" />
        <img src="assets/img/empresas_parceiras/ciser.png" alt="Ciser" loading="lazy" />
        <img src="assets/img/empresas_parceiras/docol.png" alt="Docol" loading="lazy" />
        <img src="assets/img/empresas_parceiras/fibrasca.png" alt="Fibrasca" loading="lazy" />
        <img src="assets/img/empresas_parceiras/krona.png" alt="Krona" loading="lazy" />
        <img src="assets/img/empresas_parceiras/lasa.png" alt="Lasa Outdoor" loading="lazy" />
        <img src="assets/img/empresas_parceiras/magica.png" alt="Mágica Comunicação" loading="lazy" />
        <img src="assets/img/empresas_parceiras/doterra.png" alt="doTERRA" loading="lazy" />
        <img src="assets/img/empresas_parceiras/tigre.png" alt="Tigre" loading="lazy" />
        <img src="assets/img/empresas_parceiras/tupy.png" alt="Tupy" loading="lazy" />
        <!-- duplicado para loop infinito -->
        <img src="assets/img/empresas_parceiras/bosch.png" alt="Bosch" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/ciser.png" alt="Ciser" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/docol.png" alt="Docol" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/fibrasca.png" alt="Fibrasca" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/krona.png" alt="Krona" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/lasa.png" alt="Lasa Outdoor" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/magica.png" alt="Mágica Comunicação" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/doterra.png" alt="doTERRA" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/tigre.png" alt="Tigre" loading="lazy" aria-hidden="true" />
        <img src="assets/img/empresas_parceiras/tupy.png" alt="Tupy" loading="lazy" aria-hidden="true" />
      </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>

