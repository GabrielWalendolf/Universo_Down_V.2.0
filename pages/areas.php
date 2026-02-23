<?php
$page_title = 'Áreas de Atuação | Universo Down';
$base_path = '../'; // Adiciona '../' para os links de CSS/Imagens saírem da pasta pages e acharem as raízes
$current_page = 'areas';

include '../includes/header.php';
?>

    <main>
      <!-- Hero -->
      <section class="page-hero">
        <h1>Áreas de Atuação</h1>
        <p>Conheça as frentes de trabalho da Universo Down.</p>
      </section>

      <!-- Grid de Áreas -->
      <section class="section">
        <h2>Nossas Áreas</h2>

        <div class="cards areas-grid">
          <a href="#ep" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >school</span
            >
            <h3>EP</h3>
            <p>Estimulação Precoce</p>
          </a>

          <a href="#aee" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >menu_book</span
            >
            <h3>AEE</h3>
            <p>Atendimento Educacional Especializado</p>
          </a>

          <a href="#sae" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >psychology</span
            >
            <h3>SAE</h3>
            <p>Serviço de Atendimento Especializado</p>
          </a>

          <a href="#clube-maes" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >groups</span
            >
            <h3>Clube de Mães</h3>
            <p>Apoio e troca de experiências</p>
          </a>

          <a href="#esporte" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >sports_soccer</span
            >
            <h3>Esporte</h3>
            <p>Atividades físicas inclusivas</p>
          </a>

          <a href="#cultura" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >palette</span
            >
            <h3>Cultura</h3>
            <p>Expressão artística e cultural</p>
          </a>
          <a href="#clube-livros" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >menu_book</span
            >
            <h3>Clube do Livro</h3>
            <p>Incentivo à leitura e comunicação</p>
          </a>
          <a href="#meio-ambiente-sustentabilidade" class="card" aria-controls="areaDetail">
            <span class="material-symbols-outlined" aria-hidden="true"
              >eco</span
            >
            <h3>Meio Ambiente e Sustentabilidade</h3>
            <p>Conscientização ambiental e ações sustentáveis</p>
          </a>
        </div>
        <div class="area-detail" id="areaDetail" role="region" aria-live="polite">
          <h3 data-area-title>Selecione uma área</h3>
          <div data-area-body>
            <p>Escolha um card acima para ver a descrição completa da área.</p>
          </div>
        </div>
      </section>

      <!-- Detalhes das Áreas -->

      <div class="areas-details">
        <section id="ep" class="section">
          <h2>EP — Estimulação Precoce: desenvolvimento na primeira infância</h2>
          <p>
            A estimulação precoce acontece do nascimento até, aproximadamente, os 6 anos, fase em que o cérebro apresenta maior capacidade de aprendizagem. Para crianças com síndrome de Down, esse acompanhamento é fundamental para favorecer o desenvolvimento motor, cognitivo, da comunicação e das habilidades sociais, respeitando sempre o ritmo individual.
          </p>
          <p>No Universo Down, o trabalho na fase de estimulação precoce tem início a partir dos 3 meses de vida, com atendimento interdisciplinar e terapias que se complementam:
            <ul>
              <li>
                <strong>Fonoaudiologia:</strong> Estimula a comunicação, a linguagem e a musculatura orofacial, além de auxiliar nas funções de alimentação e respiração.
              </li>
              <li>
                <strong>Fisioterapia:</strong> Trabalha força muscular, equilíbrio e coordenação, auxiliando em marcos como sentar, engatinhar e andar, promovendo mais autonomia.
              </li>
              <li>
                <strong>Terapia Ocupacional:</strong> Desenvolve coordenação motora fina, integração sensorial e independência nas atividades da vida diária.
              </li>
              <li>
                <strong>Estimulação Cognitiva / Pedagogia:</strong> Estimula atenção, memória, raciocínio e habilidades pré-acadêmicas de forma lúdica, preparando para a vida escolar.
              </li>
              <li>
                <strong>Musicalização:</strong> Nessa terapia a criança começa após adquirir a postura sentada. A música favorece o desenvolvimento da linguagem, trabalha ritmo, coordenação, interação social e expressão emocional.
              </li>
              <li>
                <strong>Sala Multissensorial:</strong> O ambiente Snoezelen, é uma abordagem de estimulação multissensorial, que oferece experiências sensoriais controladas com luz, som, cores, texturas e aromas, dentre outros recursos onde objetos são coloridos e disponibilizados para ser visto, tocado e admirado o que contribuem para relaxamento, organização sensorial, atenção e vínculo, favorecendo o bem-estar e o engajamento da criança nas atividades.
              </li>
              <li>
                <strong>Família e instituição:</strong> A participação da família é essencial. Por isso, o Universo Down orienta e envolve os responsáveis, fortalecendo a continuidade dos estímulos em casa e potencializando os resultados.
              </li>
            </ul>
            <p>Cada conquista é valorizada, pois todo avanço importa. A estimulação precoce é a base para uma trajetória de mais autonomia, inclusão e qualidade de vida.</p>
          </p>
        </section>

        <section id="aee" class="section">
          <h2>AEE — Atendimento Educacional Especializado</h2>
          <p>
            O Núcleo AEE do Universo Down atende associados a partir dos 6 anos de idade até o final da Educação Básica, oferecendo acompanhamento pedagógico especializado, com foco no desenvolvimento das habilidades acadêmicas, funcionais, sociais e na promoção da autonomia.
          </p>
          <p>
            O associado recebe acompanhamento pedagógico contínuo, aliado à combinação de outras terapias que contribuem para o seu desenvolvimento global nesta fase da vida. O direcionamento para as terapias complementares é definido a partir de uma triagem individual realizada pela equipe técnica, que avalia cuidadosamente as necessidades, potencialidades e objetivos de cada associado, sempre respeitando sua individualidade, ritmo de aprendizagem e contexto familiar.
          </p>
          <p>
            A combinação de terapias é personalizada e não segue um padrão fixo, pois cada associado apresenta características, desafios e talentos únicos. Dessa forma, o plano de atendimento é construído de maneira flexível e dinâmica, podendo incluir, conforme a necessidade: fonoaudiologia, terapia ocupacional, psicopedagogia, psicologia, estimulação cognitiva, atividades socioeducativas, entre outras intervenções que favoreçam o desenvolvimento integral.

          </p>
          <p>
            O trabalho do Núcleo AEE também busca fortalecer a articulação com a escola regular, a família e os demais profissionais envolvidos, promovendo alinhamento de estratégias, acompanhamento dos avanços e adaptação contínua dos objetivos pedagógicos. Essa parceria é fundamental para garantir a inclusão, a participação ativa do associado no ambiente escolar e o fortalecimento de suas competências acadêmicas e sociais.
          </p>
          <p>
            Mais do que atender conteúdos escolares, o Núcleo AEE do Universo Down tem como missão potencializar capacidades, estimular a autonomia, desenvolver habilidades para a vida diária e preparar o associado para uma participação mais ativa e segura na sociedade, respeitando sua trajetória, seus sonhos e suas possibilidades.
          </p>
        </section>

        <section id="sae" class="section">
          <h2>SAE — Serviço de Atendimento Especializado</h2>
          <p>
            O Núcleo SAE do Universo Down é voltado para associados a partir dos 17 anos, que estão em transição para a vida adulta ou já vivenciam essa etapa. Seu principal objetivo é favorecer a autonomia, a participação social, o desenvolvimento funcional e a construção de um projeto de vida ativo e significativo.
          </p>
          <p>
            O Núcleo SAE do Universo Down é voltado para associados a partir dos 17 anos, que estão em transição para a vida adulta ou já vivenciam essa etapa. Seu principal objetivo é favorecer a autonomia, a participação social, o desenvolvimento funcional e a construção de um projeto de vida ativo e significativo.
          </p>
          <p>
            Cada associado passa por uma avaliação individual com a equipe técnica, que identifica seu nível de independência, interesses, potencialidades e desafios. A partir dessa escuta qualificada, é construído um plano de desenvolvimento personalizado, com objetivos claros e funcionais, alinhados à realidade e aos desejos do próprio associado e de sua família.
          </p>
          <p>
            As atividades e acompanhamentos são organizados de forma flexível e personalizada, podendo incluir oficinas de autonomia, habilidades sociais, práticas de vida diária, projetos ocupacionais, estimulação cognitiva funcional, acompanhamento terapêutico e ações de inclusão comunitária. Não existe um modelo único de atendimento, pois cada pessoa constrói seu próprio caminho de desenvolvimento.
          </p>
          <p>
            O Núcleo SAE valoriza o protagonismo do associado, estimulando sua participação ativa nas escolhas, no planejamento das atividades e na construção de sua identidade adulta. A família atua como parceira nesse processo, fortalecendo a continuidade dos aprendizados no cotidiano.
          </p>
          <p>
            Mais do que atender, o SAE tem como propósito promover pertencimento, dignidade, independência possível e qualidade de vida, reconhecendo a singularidade de cada pessoa e ampliando suas oportunidades de participação na sociedade.
          </p>
        </section>

        <section id="clube-maes" class="section">
          <h2>Clube de Mães</h2>
          <p>
            O Clube de Mães é um espaço de acolhimento, troca e fortalecimento de vínculos familiares. As Mães e responsáveis participam de atividades como artesanato, costura criativa, costura sustentável com reaproveitamento de materiais, pintura e outras técnicas manuais. Além do cuidado emocional, o projeto incentiva o empreendedorismo comunitário, com a produção e comercialização de artesanatos, gerando renda e autonomia.
          </p>
        </section>

        <section id="esporte" class="section">
          <h2>Esporte</h2>
          <p>
            O esporte é uma ferramenta poderosa de inclusão, saúde e autoestima. Nosso programa esportivo oferece diversas modalidades, como ginástica, ginástica rítmica, atletismo e ensaios de dança para apresentações. Atualmente, contamos com 8 atletas que participam de competições regionais, estaduais e nacionais, em modalidades como atletismo, arremesso de peso e ginástica rítmica. Representando o Universo Down, Joinville e o estado de santa Catarina com orgulho, dedicação e superação.
          </p>
        </section>

        <section id="cultura" class="section">
          <h2>Cultura</h2>
          <p>
            Desenvolvemos diversas atividades culturais, como arteterapia, artesanato, rodas de leitura, artes visuais e dança, promovendo expressão, autoestima e pertencimento.
          </p>
          <p>
            Nosso grupo de dança, formado por 14 bailarinos com Síndrome de Down, participa de diversos eventos culturais em Santa Catarina, com destaque para apresentações na Semana da Dança e no Festival Nacional de Dança de Joinville, levando inclusão e talento aos palcos.
          </p>
        </section>
        <section id="clube-livros" class="section">
          <h2>Clube do Livro</h2>
          <p>
            O Clube do Livro é um espaço de incentivo à leitura, ao contato com a literatura e ao fortalecimento da comunicação.
          </p>
          <p>
            Por meio de atividades lúdicas e educativas, estimulamos a expressão, o diálogo e o desenvolvimento cognitivo dos associados.
          </p>
        </section>
        <section id="meio-ambiente-sustentabilidade" class="section">
          <h2>Meio Ambiente e Sustentabilidade</h2>
          <p>
            Promovemos a conscientização ambiental entre associados e familiares, incentivando uma visão sustentável e responsável.
          </p>
          <p>
            Realizamos projetos de artesanato com materiais recicláveis e ações educativas, como atividades ambientais itinerantes e visitas à praia, com foco na proteção da fauna, incluindo a confecção de placas educativas para a preservação das corujas-buraqueiras.
          </p>
        </section>
      </div>
    </main>
<?php include '../includes/footer.php'; ?>
