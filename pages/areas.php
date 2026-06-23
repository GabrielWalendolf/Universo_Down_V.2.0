<?php
$page_title       = 'Áreas de Atuação | Universo Down';
$meta_description = 'Conheça as 15 áreas de atuação da Universo Down: Pedagogia EP, SAE, AEE, Arteterapia, Psicologia, Assistência Social, Terapia Ocupacional, Fonoaudiologia e mais.';
$base_path        = '../';
$current_page     = 'areas';

include '../includes/header.php';
?>

  <!-- Page hero -->
  <section class="page-hero">
    <span class="blob blob--teal" style="width:220px;height:220px;right:-50px;top:-50px;"></span>
    <div class="container">
      <span class="eyebrow eyebrow--onnavy">O que fazemos</span>
      <h1>Áreas de atuação</h1>
      <p>Quinze frentes de trabalho que acompanham cada pessoa em todas as fases da vida.</p>
    </div>
  </section>


  <!-- EP -->
  <section class="band band--tight">
    <div class="container area-detail" id="ep">
      <aside class="area-aside">
        <h2>Pedagogia EP</h2>
        <p class="age">Dos 6 meses até 6 anos</p>
        <figure class="photo" style="height:340px;margin-top:20px;">
          <img src="<?php echo $base_path; ?>assets/img/areas/ep.jpeg" alt="Pedagogia EP" loading="lazy" />
        </figure>
      </aside>
      <div class="area-body">
        <p>A estimulação precoce acontece do nascimento até, aproximadamente, os 6 anos — fase em que o cérebro apresenta maior capacidade de aprendizagem. Para crianças com Síndrome de Down, esse acompanhamento favorece o desenvolvimento motor, cognitivo, da comunicação e das habilidades sociais, sempre respeitando o ritmo individual.</p>
        <p>No Universo Down, o trabalho tem início a partir dos 6 meses de vida, com atendimento interdisciplinar e terapias que se complementam:</p>
        <div class="area-list">
          <div class="item"><b>Fonoaudiologia</b><span> — comunicação, linguagem e musculatura orofacial, além de alimentação e respiração.</span></div>
          <div class="item"><b>Fisioterapia</b><span> — força, equilíbrio e coordenação, auxiliando a sentar, engatinhar e andar.</span></div>
          <div class="item"><b>Terapia Ocupacional</b><span> — coordenação motora fina, integração sensorial e independência no dia a dia.</span></div>
          <div class="item"><b>Pedagogia / Estimulação Cognitiva</b><span> — atenção, memória, raciocínio e habilidades pré-acadêmicas de forma lúdica.</span></div>
          <div class="item"><b>Musicalização</b><span> — linguagem, ritmo, coordenação, interação social e expressão emocional.</span></div>
          <div class="item"><b>Sala Multissensorial</b><span> — ambiente multissensorial com luz, som, texturas e aromas para organização sensorial e vínculo.</span></div>
        </div>
        <p style="margin-top:18px;">A participação da família é essencial: orientamos e envolvemos os responsáveis para dar continuidade aos estímulos em casa. Cada conquista é valorizada, porque todo avanço importa.</p>
      </div>
    </div>
  </section>

  <!-- AEE -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container area-detail" id="aee">
      <aside class="area-aside">
        <h2>Pedagogia AEE</h2>
        <p class="age">A partir dos 6 anos</p>
        <div class="photo" style="height:200px;margin-top:20px;display:flex;align-items:center;justify-content:center;background:var(--tint);">
          <span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span>
        </div>
      </aside>
      <div class="area-body">
        <p>O Núcleo AEE atende associados a partir dos 6 anos até o final da Educação Básica, com acompanhamento pedagógico especializado focado em habilidades acadêmicas, funcionais, sociais e na promoção da autonomia.</p>
        <p>A combinação de terapias é personalizada — cada associado tem características, desafios e talentos únicos. O plano pode incluir fonoaudiologia, terapia ocupacional, psicopedagogia, psicologia, estimulação cognitiva e atividades socioeducativas.</p>
        <p>Também fortalecemos a articulação com a escola regular e a família, alinhando estratégias. Mais do que conteúdos escolares, o objetivo é potencializar capacidades e preparar para uma participação ativa e segura na sociedade.</p>
      </div>
    </div>
  </section>

  <!-- SAE -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container area-detail" id="sae">
      <aside class="area-aside">
        <h2>Pedagogia SAE</h2>
        <p class="age">A partir dos 18 anos</p>
        <figure class="photo" style="height:340px;margin-top:20px;">
          <img src="<?php echo $base_path; ?>assets/img/areas/sae.jpeg" alt="Pedagogia SAE" loading="lazy" />
        </figure>
      </aside>
      <div class="area-body">
        <p>O Núcleo SAE é voltado para associados a partir dos 18 anos, em transição para a vida adulta. Seu objetivo é favorecer a autonomia, a participação social, o desenvolvimento funcional e a construção de um projeto de vida ativo e significativo.</p>
        <p>Cada associado passa por avaliação individual com a equipe técnica, que identifica seu nível de independência, interesses e potencialidades. A partir dessa escuta, construímos um plano de desenvolvimento personalizado.</p>
        <p>As atividades incluem oficinas de autonomia, habilidades sociais, práticas de vida diária, projetos ocupacionais e ações de inclusão comunitária — sempre valorizando o protagonismo, com a família como parceira.</p>
      </div>
    </div>
  </section>

  <!-- Demais áreas -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container">
      <div class="area-cards">
        <div class="card" id="arteterapia">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--blue"><span class="material-symbols-outlined">palette</span></div><h3>Arteterapia</h3></div>
          <p style="color:var(--muted);">Arte como instrumento terapêutico que favorece a expressão emocional, a criatividade e o autoconhecimento dos associados. Por meio de diferentes linguagens artísticas, trabalhamos habilidades comunicativas, afetivas e cognitivas de forma lúdica e significativa.</p>
        </div>
        <div class="card" id="psicologia">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--soft-orange"><span class="material-symbols-outlined">psychology</span></div><h3>Psicologia</h3></div>
          <p style="color:var(--muted);">Acompanhamento psicológico individual que apoia o bem-estar emocional, o desenvolvimento pessoal e o fortalecimento das relações familiares. Também oferecemos escuta e orientação às famílias, reconhecendo seu papel central no processo de cada associado.</p>
        </div>
        <div class="card" id="assistencia-social">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--tealdeep"><span class="material-symbols-outlined">groups</span></div><h3>Assistência Social</h3></div>
          <p style="color:var(--muted);">Orientação às famílias no acesso a direitos, benefícios sociais e serviços da rede de proteção, fortalecendo a autonomia e a cidadania. Atuamos de forma integrada com a equipe técnica para garantir que nenhuma família fique sem o suporte de que precisa.</p>
        </div>
        <div class="card" id="to">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--teal"><span class="material-symbols-outlined">accessibility_new</span></div><h3>Terapia Ocupacional</h3></div>
          <p style="color:var(--muted);">Desenvolve a coordenação motora fina, a integração sensorial e a independência nas atividades do cotidiano, potencializando a autonomia. O atendimento é individualizado e acompanha cada fase do desenvolvimento — da infância à vida adulta.</p>
        </div>
        <div class="card" id="ed-fisica">
          <figure class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;">
            <img src="<?php echo $base_path; ?>assets/img/areas/educacao_fisica.jpeg" alt="Educação Física" loading="lazy" />
          </figure>
          <div class="head"><div class="badge badge--yellow"><span class="material-symbols-outlined">sports_soccer</span></div><h3>Educação Física</h3></div>
          <p style="color:var(--muted);">Atividades físicas e esportivas que promovem saúde, coordenação motora, autoestima e convivência social. O movimento é um aliado poderoso no desenvolvimento global — e aqui ele é praticado com alegria, respeito e propósito.</p>
        </div>
        <div class="card" id="fono">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--navy"><span class="material-symbols-outlined">record_voice_over</span></div><h3>Fonoaudiologia</h3></div>
          <p style="color:var(--muted);">Atendimento focado em comunicação, linguagem oral e escrita, musculatura orofacial, alimentação e respiração — base essencial para o desenvolvimento global. Trabalhamos desde os primeiros meses de vida até a fase adulta, sempre de forma integrada com as demais áreas.</p>
        </div>
        <div class="card" id="fisio">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--orange"><span class="material-symbols-outlined">self_improvement</span></div><h3>Fisioterapia</h3></div>
          <p style="color:var(--muted);">Trabalha força muscular, equilíbrio e coordenação, apoiando o desenvolvimento motor e a mobilidade ao longo de toda a vida. O atendimento é individualizado e adaptado às necessidades de cada fase — do bebê que aprende a sentar ao adulto que busca mais independência.</p>
        </div>
        <div class="card" id="informatica">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--blue"><span class="material-symbols-outlined">computer</span></div><h3>Informática</h3></div>
          <p style="color:var(--muted);">Inclusão digital com aulas práticas que desenvolvem habilidades tecnológicas, autonomia e preparo para o mundo contemporâneo. Os associados aprendem a usar computadores e ferramentas digitais de forma funcional e significativa para o dia a dia.</p>
        </div>
        <div class="card" id="snoezelen">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--tealdeep"><span class="material-symbols-outlined">lightbulb</span></div><h3>Multissensorial</h3></div>
          <p style="color:var(--muted);">Ambiente multissensorial com estímulos controlados de luz, som, tato e aroma para organização sensorial, relaxamento e fortalecimento de vínculos. A sala multissensorial é um espaço de calma e exploração, especialmente indicado para momentos de regulação emocional e estímulo sensorial.</p>
        </div>
        <div class="card" id="musica">
          <figure class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;">
            <img src="<?php echo $base_path; ?>assets/img/areas/musica.jpeg" alt="Música" loading="lazy" />
          </figure>
          <div class="head"><div class="badge badge--blue"><span class="material-symbols-outlined">music_note</span></div><h3>Música</h3></div>
          <p style="color:var(--muted);">Aulas e atividades musicais que desenvolvem ritmo, expressão, linguagem e interação social. A música abre caminhos de comunicação e identidade — e no Universo Down ela pulsa em diferentes formatos, dos instrumentos à voz, do individual ao coletivo.</p>
        </div>
        <div class="card" id="psicopedagogia">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--soft-orange"><span class="material-symbols-outlined">school</span></div><h3>Psicopedagogia</h3></div>
          <p style="color:var(--muted);">Intervenção especializada nas dificuldades de aprendizagem, com estratégias individualizadas para o desenvolvimento cognitivo e escolar. Trabalhamos em parceria com a família e a escola para construir pontes entre o potencial de cada associado e suas conquistas acadêmicas.</p>
        </div>
        <div class="card" id="avds">
          <div class="photo" style="height:180px;margin:-32px -32px 20px;border-radius:var(--radius-card) var(--radius-card) 0 0;display:flex;align-items:center;justify-content:center;background:var(--tint);"><span class="material-symbols-outlined" style="font-size:52px;color:var(--muted);">image</span></div>
          <div class="head"><div class="badge badge--navy"><span class="material-symbols-outlined">home</span></div><h3>AVD's</h3></div>
          <p style="color:var(--muted);">Atividades de Vida Diária com foco em habilidades práticas — higiene, alimentação, organização e mobilidade — para maior independência no cotidiano. Cada conquista nessa área representa um passo concreto em direção à autonomia e à participação ativa na vida social.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Lightbox -->
  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Visualizar imagem ampliada">
    <button class="lightbox-close" id="lightboxClose" aria-label="Fechar">&times;</button>
    <img class="lightbox-img" id="lightboxImg" src="" alt="" />
    <p class="lightbox-caption" id="lightboxCaption"></p>
  </div>

  <!-- CTA -->
  <section class="band band--navy cta-band">
    <span class="blob blob--teal" style="width:180px;height:180px;right:-40px;top:-40px;"></span>
    <div class="container">
      <h2>Quer saber se podemos ajudar sua família?</h2>
      <p style="font-size:17px;">Fale com a gente — vamos te orientar sobre o melhor caminho.</p>
      <a class="btn btn--orange btn--lg" href="<?php echo $base_path; ?>pages/contato.php">Fale conosco</a>
    </div>
  </section>

<?php
$extra_scripts = ['js/areas.js'];
include '../includes/footer.php';
?>
