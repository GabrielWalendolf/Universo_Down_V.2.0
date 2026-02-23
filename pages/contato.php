<?php
$page_title = 'Contato | Universo Down';
$base_path = '../'; // Adiciona '../' para os links de CSS/Imagens saírem da pasta pages e acharem as raízes
$current_page = 'contato';

include '../includes/header.php';
?>
    <main>
      <!-- Hero -->
      <section class="page-hero">
        <h1>Contato</h1>
        <p>Fale conosco, apoie nossas ações ou faça parte da equipe.</p>
      </section>

      <!-- Contatos -->
      <section class="section">
        <h2>Informações de Contato</h2>

        <div class="cards contact-cards">
          <div class="card">
            <span class="material-symbols-outlined">mail</span>
            <h3>E-mail</h3>
            <p>
              <a href="mailto:contato@universodown.org"
                >contato@universodown.org</a
              >
            </p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined">call</span>
            <h3>Telefone</h3>
            <p><a href="tel:+550000000000">00 0000-0000</a></p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined">share</span>
            <h3>Redes Sociais</h3>
            <p>
              <a href="#" aria-label="Instagram">Instagram</a> |
              <a href="#" aria-label="Facebook">Facebook</a>
            </p>
          </div>
        </div>
      </section>

      <!-- Doação -->
      <section class="section">
        <h2>Como Doar</h2>

        <div class="donation">
          <img
            src="../assets/img/qr-doacao.png"
            alt="QR Code para doação - placeholder"
          />
          <p>
            Sua contribuição ajuda a manter nossos projetos e ações. Utilize o
            QR Code ao lado para realizar sua doação.
          </p>
        </div>
      </section>

      <!-- Trabalhe Conosco -->
      <section class="section">
        <h2>Trabalhe Conosco</h2>
        <p>Envie seus dados e uma mensagem. Entraremos em contato.</p>

        <form id="workForm" class="contact-form">
          <label>
            Nome
            <input type="text" required />
          </label>

          <label>
            E-mail
            <input type="email" required />
          </label>

          <label>
            Mensagem
            <textarea required></textarea>
          </label>

          <button type="submit" class="btn-primary">Enviar</button>
          <p id="formSuccess" class="success-message" hidden>
            Mensagem enviada com sucesso! (simulação)
          </p>
        </form>
      </section>

      <!-- WhatsApp -->
      <section class="section cta">
        <h2>Prefere falar pelo WhatsApp?</h2>
        <a
          href="https://wa.me/<NUMERO>?text=Venho%20atrav%C3%A9s%20do%20Site"
          class="btn-primary"
          aria-label="Falar via WhatsApp"
        >
          Falar no WhatsApp
        </a>
      </section>

      <!-- Endereço -->
      <section class="section">
        <h2>Onde Estamos</h2>
        <p>Endereço institucional (placeholder)</p>
        <!-- Mapa opcional -->
        <div class="map-placeholder">Mapa (placeholder)</div>
      </section>
    </main>

<?php include '../includes/footer.php'; ?>
