<?php
/**
 * includes/footer.php — fecha <main>, renderiza rodapé e scripts
 */
$base_path = isset($base_path) ? $base_path : '';
?>
    </main>

    <footer class="footer" role="contentinfo">
      <div class="container">
        <div class="footer-cols">
          <div>
            <img class="footer-logo" src="<?php echo $base_path; ?>assets/img/Logo-UniversoDown-lado.png" alt="Universo Down" />
            <p class="desc">Associação de Joinville/SC dedicada à inclusão, autonomia e desenvolvimento funcional de pessoas com Síndrome de Down.</p>
          </div>
          <div>
            <h4>Institucional</h4>
            <ul role="list">
              <li><a href="<?php echo $base_path; ?>pages/quem-somos.php">Associação</a></li>
              <li><a href="<?php echo $base_path; ?>pages/transparencia.php">Transparência</a></li>
              <li><a href="<?php echo $base_path; ?>pages/areas.php">Áreas</a></li>
            </ul>
          </div>
          <div>
            <h4>Contato</h4>
            <ul role="list">
              <li><a href="tel:+554734232102">(47) 3423-2102</a></li>
              <li><a href="https://wa.me/5547992831569" target="_blank" rel="noopener">(47) 99283-1569 · WhatsApp</a></li>
              <li><a href="mailto:adesd.joinville@yahoo.com.br">adesd.joinville@yahoo.com.br</a></li>
            </ul>
          </div>
          <div>
            <h4>Onde estamos</h4>
            <ul role="list">
              <li>Rua Ministro Calógeras, 758, Centro, Joinville/SC</li>
              <li>Seg. a sex.: 8h–12h e 13h–17h</li>
              <li>
                <a href="https://www.instagram.com/universodown/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fi fi-brands-instagram"></i></a>
                &nbsp;
                <a href="https://www.linkedin.com/company/universo-down/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fi fi-brands-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-meta">
          <span>© <?php echo date('Y'); ?> Associação Universo Down</span>
          <span class="footer-meta-center">Feito por <a href="https://walendolf.dev" target="_blank" rel="noopener">walendolf.dev</a></span>
          <span class="footer-meta-right">CNPJ 81.144.099/0001-05</span>
        </div>
      </div>
    </footer>

<?php include __DIR__ . '/scripts.php'; ?>
  </body>
</html>
