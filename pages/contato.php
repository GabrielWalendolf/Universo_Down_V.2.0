<?php
$page_title       = 'Contato | Universo Down';
$meta_description = 'Entre em contato com a Universo Down. Fale conosco, apoie nossas ações ou faça parte da equipe em Joinville/SC.';
$base_path        = '../';
$current_page     = 'contato';
$hero_image       = 'assets/img/hero/teste.png';

include '../includes/header.php';
?>
    <main>
      <!-- Hero -->
      <section class="page-hero"<?php echo hero_style(); ?>>
        <div class="hero-content">
          <h1>Contato</h1>
          <p>Fale conosco, apoie nossas ações ou faça parte da equipe.</p>
        </div>
      </section>

      <!-- Contatos -->
      <section class="section">
        <h2>Informações de Contato</h2>

        <div class="cards contact-cards">
          <div class="card">
            <span class="material-symbols-outlined">mail</span>
            <h3>E-mail</h3>
            <p>
              <a href="mailto:adesd.joinville@yahoo.com.br">adesd.joinville@yahoo.com.br</a>
            </p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined">call</span>
            <h3>Telefone</h3>
            <p><a href="tel:+554734232102">(47) 3423-2102</a></p>
          </div>

          <div class="card">
            <span class="material-symbols-outlined">share</span>
            <h3>Redes Sociais</h3>
            <p>
              <a href="https://www.instagram.com/universodown/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">Instagram</a> |
              <a href="https://www.linkedin.com/company/universo-down/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">LinkedIn</a>
            </p>
          </div>
        </div>
      </section>

      <!-- Doação -->
      <section class="section">
        <h2>Como Doar</h2>
        <div class="donation">
          <img src="../assets/img/qr-doacao.png" alt="QR Code para doação - placeholder" />
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

        <!-- CORRIGIDO: id nos inputs, labels associados, action para send-mail.php -->
        <form id="workForm" class="contact-form" novalidate>
          <label for="nome">Nome</label>
          <input
            type="text"
            id="nome"
            name="nome"
            placeholder="Seu nome completo"
            required
            autocomplete="name"
          />

          <label for="email">E-mail</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="seu@email.com"
            required
            autocomplete="email"
          />

          <label for="mensagem">Mensagem</label>
          <textarea
            id="mensagem"
            name="mensagem"
            placeholder="Escreva sua mensagem..."
            required
          ></textarea>

          <button type="submit" class="btn-primary">Enviar</button>

          <p id="formSuccess" class="success-message" hidden>
            ✓ Mensagem enviada com sucesso! Em breve entraremos em contato.
          </p>
          <p id="formError" class="error-message" hidden>
            ✗ Não foi possível enviar. Tente novamente ou entre em contato por e-mail.
          </p>
        </form>
      </section>

      <!-- WhatsApp -->
      <section class="section cta">
        <h2>Prefere falar pelo WhatsApp?</h2>
        <a
          href="https://wa.me/5547992831569?text=Venho%20atrav%C3%A9s%20do%20Site"
          class="btn-primary"
          target="_blank"
          rel="noopener"
          aria-label="Falar via WhatsApp"
        >
          Falar no WhatsApp
        </a>
      </section>

      <!-- Endereço -->
      <section class="section">
        <h2>Onde Estamos</h2>
        <p>Rua Ministro Calógeras, 758 / R. Conselheiro Mafra, 258 — Centro, Joinville/SC, CEP 89201-480</p>
        <div class="map-container">
          <iframe
            src="https://maps.google.com/maps?q=Rua+Ministro+Cal%C3%B3geras,+758,+Centro,+Joinville,+SC,+89201-480&hl=pt-BR&z=16&output=embed"
            title="Localização da Universo Down no Google Maps"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </section>
    </main>

    <script>
      const form = document.getElementById('workForm');
      const successMsg = document.getElementById('formSuccess');
      const errorMsg = document.getElementById('formError');

      form.addEventListener('submit', async (e) => {
        e.preventDefault();
        successMsg.hidden = true;
        errorMsg.hidden = true;

        const submitBtn = form.querySelector('[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Enviando…';

        try {
          const res = await fetch('<?php echo $base_path; ?>send-email.php', {
            method: 'POST',
            body: new FormData(form),
          });

          const data = await res.json();

          if (data.ok) {
            successMsg.hidden = false;
            form.reset();
          } else {
            errorMsg.hidden = false;
          }
        } catch {
          errorMsg.hidden = false;
        } finally {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Enviar';
        }
      });
    </script>

<?php include '../includes/footer.php'; ?>