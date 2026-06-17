<?php
/**
 * includes/scripts.php — scripts no final do <body>
 *
 * Para scripts por página:  $extra_scripts = ['js/minha-pagina.js'];
 * Para JS inline pequeno:    $inline_script = "console.log('olá')";
 */
$base_path     = isset($base_path)     ? $base_path     : '';
$extra_scripts = isset($extra_scripts) ? $extra_scripts : [];
$inline_script = isset($inline_script) ? $inline_script : '';
?>
  <script src="<?php echo $base_path; ?>js/components.js" defer></script>
  <script src="<?php echo $base_path; ?>js/main.js" defer></script>

  <?php foreach ($extra_scripts as $script): ?>
  <script src="<?php echo $base_path . htmlspecialchars($script); ?>" defer></script>
  <?php endforeach; ?>

  <?php if ($inline_script): ?>
  <script><?php echo $inline_script; ?></script>
  <?php endif; ?>
