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
            <p><i class="fi fi-sr-marker"></i> Rua Ministro Calógeras, 758 / R. Conselheiro Mafra, 258 — Centro, Joinville/SC, CEP 89201-480</p>
            <p>
              <i class="fi fi-sr-phone-call"></i>
              <a href="tel:+554734232102">(47) 3423-2102</a> •
              <i class="fi fi-brands-whatsapp"></i>
              <a href="https://wa.me/5547992831569">(47) 99283-1569</a>
            </p>
            <p>
              <i class="fi fi-sr-envelope"></i>
              <a href="mailto:adesd.joinville@yahoo.com.br">adesd.joinville@yahoo.com.br</a>
            </p>
          </div>
          <div class="footer-col">
            <p><strong>Horários</strong></p>
            <p>Segunda à sexta: 8h às 12h e 13h às 17h</p>
          </div>
        </div>
      </div>
    </footer>

<?php include __DIR__ . '/scripts.php'; ?>
  </body>
</html>