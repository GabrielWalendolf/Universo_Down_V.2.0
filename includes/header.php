<?php
/**
 * includes/header.php — <head> + topbar + navegação
 *
 * Variáveis esperadas (declarar ANTES do include):
 *   $page_title, $meta_description, $base_path, $current_page
 *
 *   $base_path    : '' na raiz, '../' em pages/
 *   $current_page : 'home' | 'quem-somos' | 'areas' | 'transparencia' | 'contato'
 */
$base_path    = isset($base_path)    ? $base_path    : '';
$current_page = isset($current_page) ? $current_page : 'home';

// Helper para marcar item ativo
function nav_active(string $slug, string $current): string {
    return $slug === $current ? ' active' : '';
}
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <?php include __DIR__ . '/head-meta.php'; ?>
  </head>
  <body>

    <!-- Topbar -->
    <div class="topbar">
      <div class="container topbar-inner">
        <div class="topbar-group">
          <span><i class="fi fi-sr-phone-call"></i><a href="tel:+554734232102">(47) 3423-2102</a></span>
          <span class="sep">•</span>
          <span><i class="fi fi-sr-envelope"></i><a href="mailto:adesd.joinville@yahoo.com.br">adesd.joinville@yahoo.com.br</a></span>
        </div>
        <div class="topbar-group">
          <span>Joinville · SC</span>
          <span class="sep">•</span>
          <a href="https://www.instagram.com/universodown/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fi fi-brands-instagram"></i></a>
          <a href="https://www.linkedin.com/company/universo-down/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fi fi-brands-linkedin"></i></a>
        </div>
      </div>
    </div>

    <!-- Header / Navegação -->
    <header class="header" role="banner">
      <div class="container header-inner">
        <a href="<?php echo $base_path; ?>index.php" aria-label="Página inicial">
          <img class="logo" src="<?php echo $base_path; ?>assets/img/universo-down-logo.png" alt="Universo Down" width="100" height="400" />
        </a>
        <nav class="nav" aria-label="Navegação principal">
          <button id="menuToggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="navMenu">☰</button>
          <ul id="navMenu" role="list">
            <li><a class="<?php echo trim(nav_active('home', $current_page)); ?>"          href="<?php echo $base_path; ?>index.php">Início</a></li>
            <li><a class="<?php echo trim(nav_active('quem-somos', $current_page)); ?>"    href="<?php echo $base_path; ?>pages/quem-somos.php">Associação</a></li>
            <li><a class="<?php echo trim(nav_active('areas', $current_page)); ?>"         href="<?php echo $base_path; ?>pages/areas.php">Áreas</a></li>
            <li><a class="<?php echo trim(nav_active('transparencia', $current_page)); ?>" href="<?php echo $base_path; ?>pages/transparencia.php">Transparência</a></li>
            <li><a class="<?php echo trim(nav_active('contato', $current_page)); ?>"       href="<?php echo $base_path; ?>pages/contato.php">Contato</a></li>
          </ul>
          <a class="btn btn--orange" href="<?php echo $base_path; ?>pages/contato.php#doar">Doar agora</a>
        </nav>
      </div>
    </header>

    <main>
