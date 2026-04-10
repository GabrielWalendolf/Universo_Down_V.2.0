<?php
/**
 * includes/footer.php
 *
 * Fecha o <main>, renderiza o rodapé, o cookie banner,
 * inclui scripts.php e fecha </body></html>.
 */
$base_path = isset($base_path) ? $base_path : '';
?>
    <footer class="footer" role="contentinfo">
      <div class="container footer-inner">
        <div class="footer-columns">
          <div class="footer-col">
            <p><strong>Universo Down</strong></p>
            <p><i class="fi fi-sr-marker"></i> Endereço institucional (placeholder)</p>
            <p>
              <i class="fi fi-sr-phone-call"></i>
              <a href="tel:+550000000000">00 0000-0000</a> •
              <a href="tel:+550000000000">00 00000-0000</a>
            </p>
            <p>
              <i class="fi fi-sr-envelope"></i>
              <a href="mailto:contato@universodown.org">contato@universodown.org</a>
            </p>
          </div>
          <div class="footer-col">
            <p><strong>Horários</strong></p>
            <p>Segunda à sexta: 08h às 17h</p>
            <p>Atendimento ao público: 08h às 17h</p>
            <nav class="footer-links" aria-label="Links institucionais">
              <a href="#"                                               rel="nofollow">Política de Privacidade</a>
              <a href="#"                                               rel="nofollow">Transparência</a>
              <a href="<?php echo $base_path; ?>pages/contato.php">Contato</a>
            </nav>
          </div>
        </div>
        <div>
          <a href="<?php echo $base_path; ?>pages/contato.php" class="btn-secondary">
            Como ajudar / Doar
          </a>
        </div>
      </div>
    </footer>

    <!-- Cookie Banner -->
    <div id="cookieBanner" class="cookie-banner" role="dialog" aria-label="Aviso de cookies">
      <p>Este site utiliza cookies para melhorar a experiência.</p>
      <button id="acceptCookies">Aceitar</button>
    </div>

    <?php include __DIR__ . '/scripts.php'; ?>
  </body>
</html>