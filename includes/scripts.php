<?php
/**
 * includes/scripts.php
 *
 * Bloco centralizado de scripts carregados no final do <body>.
 * Incluído pelo footer.php — não inclua diretamente nas páginas.
 *
 * Para adicionar scripts específicos de uma página, declare antes do
 * include do footer:
 *
 *   $extra_scripts = ['js/minha-pagina.js'];
 *   include '../includes/footer.php';
 *
 * Ou use o slot $inline_script para JS inline pequeno:
 *
 *   $inline_script = "console.log('olá')";
 */

$base_path     = isset($base_path)     ? $base_path     : '';
$extra_scripts = isset($extra_scripts) ? $extra_scripts : [];
$inline_script = isset($inline_script) ? $inline_script : '';
?>
  <!-- Scripts globais -->
  <script src="<?php echo $base_path; ?>js/theme.js"      defer></script>
  <script src="<?php echo $base_path; ?>js/components.js" defer></script>
  <script src="<?php echo $base_path; ?>js/main.js"       defer></script>

  <?php foreach ($extra_scripts as $script): ?>
  <script src="<?php echo $base_path . htmlspecialchars($script); ?>" defer></script>
  <?php endforeach; ?>

  <?php if ($inline_script): ?>
  <script><?php echo $inline_script; ?></script>
  <?php endif; ?>