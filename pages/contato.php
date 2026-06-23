<?php
$page_title       = 'Contato | Universo Down';
$meta_description = 'Entre em contato com a Universo Down. Fale conosco, apoie nossas ações via Pix ou faça parte da equipe em Joinville/SC.';
$base_path        = '../';
$current_page     = 'contato';

include '../includes/header.php';
?>

  <!-- Page hero -->
  <section class="page-hero">
    <span class="blob blob--teal" style="width:220px;height:220px;right:-50px;top:-50px;"></span>
    <div class="container">
      <span class="eyebrow eyebrow--onnavy">Fale com a gente</span>
      <h1>Contato</h1>
      <p>Fale conosco, apoie nossas ações ou faça parte da equipe.</p>
    </div>
  </section>

  <!-- Cartões de contato -->
  <section class="band band--tight">
    <div class="container grid grid-3">
      <div class="card contact-card card-hover">
        <div class="badge badge--soft-teal"><span class="material-symbols-outlined">mail</span></div>
        <h3>E-mail</h3>
        <a href="mailto:adesd.joinville@yahoo.com.br" style="word-break:break-all;">adesd.joinville@yahoo.com.br</a>
      </div>
      <div class="card contact-card card-hover">
        <div class="badge badge--soft-teal" style="color:var(--teal);"><span class="material-symbols-outlined">call</span></div>
        <h3>Telefone / WhatsApp</h3>
        <p style="display:flex;flex-direction:column;gap:5px;">
          <a href="https://wa.me/5547992831569?text=Venho%20atrav%C3%A9s%20do%20Site" target="_blank" rel="noopener noreferrer">(47) 99283-1569 · WhatsApp</a>
          <a href="tel:+554734232102">(47) 3423-2102</a>
        </p>
      </div>
      <div class="card contact-card card-hover">
        <div class="badge badge--soft-orange"><span class="material-symbols-outlined">share</span></div>
        <h3>Redes sociais</h3>
        <p>
          <a href="https://www.instagram.com/universodown/" target="_blank" rel="noopener noreferrer">Instagram</a> ·
          <a href="https://www.linkedin.com/company/universo-down/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        </p>
      </div>
    </div>
  </section>

  <!-- Onde estamos -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container">
      <span class="eyebrow">Onde estamos</span>
      <h2 style="margin-bottom:8px;">Centro de Joinville · SC</h2>
      <p style="margin-bottom:24px;">Rua Ministro Calógeras, 758 / R. Conselheiro Mafra, 258 — Centro, Joinville/SC, CEP 89201-480</p>
      <div class="map-frame">
        <iframe src="https://maps.google.com/maps?q=Rua+Ministro+Cal%C3%B3geras,+758,+Centro,+Joinville,+SC,+89201-480&hl=pt-BR&z=16&output=embed" title="Localização da Universo Down no Google Maps" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- Doação -->
  <section class="band band--tight" style="padding-top:0;" id="doar">
    <div class="container">
      <div class="donation-block">
        <span class="blob blob--teal" style="width:180px;height:180px;right:-40px;bottom:-40px;"></span>
        <div class="donation-grid">
          <div class="donate-card">
            <img class="qr-img" src="<?php echo $base_path; ?>assets/img/qrcode/QRcode_associacao.jpeg" alt="QR Code para doação via Pix" />
            <div style="font-weight:800;font-size:14px;margin-bottom:10px;">Pix · CNPJ</div>
            <div class="pix-row">
              <code id="pixKey">81144099000105</code>
              <button type="button" class="btn-copy" onclick="copyPix()" aria-label="Copiar chave Pix"><i class="fi fi-rr-copy"></i> Copiar</button>
            </div>
            <span class="pix-feedback" id="pixFeedback" aria-live="polite"></span>
          </div>
          <div>
            <span class="eyebrow eyebrow--onnavy is-yellow">Como doar</span>
            <h2 style="margin-bottom:14px; color:#fff;">Sua contribuição mantém nossos projetos vivos.</h2>
            <p style="font-size:16px;">Use o QR Code ou copie a chave Pix ao lado para realizar sua doação. Qualquer valor ajuda a manter atendimentos 100% gratuitos para dezenas de famílias.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trabalhe conosco -->
  <section class="band">
    <div class="container split contact-form-grid">
      <div>
        <span class="eyebrow">Trabalhe conosco</span>
        <h2 style="margin-bottom:14px;">Quer fazer parte da equipe?</h2>
        <p style="margin-bottom:20px;">Envie seus dados e uma mensagem. Entraremos em contato assim que possível.</p>
      </div>
      <div class="form-wrap">
        <form id="workForm" class="contact-form" novalidate>
          <div class="form-field">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required autocomplete="name" />
          </div>
          <div class="form-field">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required autocomplete="email" />
          </div>
          <div class="form-field">
            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem..." required></textarea>
          </div>
          <button type="submit" class="btn btn--orange btn--lg">Enviar</button>
          <p id="formSuccess" class="success-message" hidden>✓ Mensagem enviada com sucesso! Em breve entraremos em contato.</p>
          <p id="formError" class="error-message" hidden>✗ Não foi possível enviar. Tente novamente ou escreva para o nosso e-mail.</p>
        </form>
      </div>
    </div>
  </section>

  <!-- WhatsApp -->
  <section class="band band--tight" style="padding-top:0;">
    <div class="container">
      <div class="whatsapp-band">
        <div>
          <h2>Prefere falar pelo WhatsApp?</h2>
          <p>Atendimento rápido e direto, de segunda a sexta.</p>
        </div>
        <a class="btn btn--teal btn--lg" href="https://wa.me/5547992831569?text=Venho%20atrav%C3%A9s%20do%20Site" target="_blank" rel="noopener">Falar no WhatsApp</a>
      </div>
    </div>
  </section>

<?php
$inline_script = <<<JS
  function copyPix() {
    const key = document.getElementById('pixKey').textContent.trim();
    navigator.clipboard.writeText(key).then(() => {
      const fb = document.getElementById('pixFeedback');
      fb.textContent = 'Chave copiada!';
      setTimeout(() => { fb.textContent = ''; }, 2500);
    });
  }

  const form = document.getElementById('workForm');
  if (form) {
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
        const res = await fetch('{$base_path}send-email.php', { method: 'POST', body: new FormData(form) });
        const data = await res.json();
        if (data.ok) { successMsg.hidden = false; form.reset(); }
        else { errorMsg.hidden = false; }
      } catch { errorMsg.hidden = false; }
      finally { submitBtn.disabled = false; submitBtn.textContent = 'Enviar'; }
    });
  }
JS;
include '../includes/footer.php';
?>
