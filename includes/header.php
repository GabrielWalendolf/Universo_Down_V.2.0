<?php
/**
 * includes/header.php
 *
 * Variáveis esperadas (declarar na página antes do include):
 *   $page_title       — título da aba/página
 *   $meta_description — descrição SEO
 *   $base_path        — caminho relativo até a raiz ('', '../')
 *   $current_page     — slug da página atual para marcar nav como active
 *   $hero_image       — (opcional) imagem de fundo do hero/page-hero
 *                       ex: 'assets/img/hero-areas.jpg'
 *                       se omitida, usa a imagem padrão (test_img.jpg)
 *   $og_image         — (opcional) imagem para Open Graph
 */

// Fallbacks de variáveis obrigatórias
$page_title       = isset($page_title)       ? $page_title       : 'Universo Down';
$meta_description = isset($meta_description) ? $meta_description : 'Universo Down — Inclusão, autonomia e desenvolvimento.';
$base_path        = isset($base_path)        ? $base_path        : '';
$current_page     = isset($current_page)     ? $current_page     : 'home';

// $hero_image: se a página não declarar, o CSS usa a imagem padrão do :root
// Se declarar, geramos um estilo inline para sobrescrever
$hero_inline_style = '';
if (!empty($hero_image)) {
    $hero_url          = $base_path . htmlspecialchars($hero_image);
    $hero_inline_style = " style=\"background-image: url('{$hero_url}')\"";
    // Exporta para ser usado nas seções hero via data attribute
}
?>
<!doctype html>
<html lang="pt-BR" data-theme="light">
  <head>
    <?php include __DIR__ . '/head-meta.php'; ?>
  </head>
  <body<?php if (!empty($hero_image)) echo " data-hero-image=\"{$base_path}{$hero_image}\""; ?>>

    <!-- Topbar -->
    <div class="topbar">
      <div class="container topbar-inner">
        <div class="topbar-left">
          <span>
            <i class="fi fi-sr-phone-call"></i>
            <a href="tel:+554734232102">(47) 3423-2102</a> |
            <i class="fi fi-sr-envelope"></i>
            <a href="mailto:adesd.joinville@yahoo.com.br">adesd.joinville@yahoo.com.br</a>
          </span>
        </div>
        <div class="header-actions">
          <div class="social-links" aria-label="Redes sociais">
            <a href="https://www.linkedin.com/company/universo-down/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
              <i class="fi fi-brands-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/universodown/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
              <i class="fi fi-brands-instagram"></i>
            </a>
          </div>
          <button id="themeToggle" aria-label="Alternar tema claro/escuro">
            <span class="material-symbols-outlined" aria-hidden="true">dark_mode</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Header / Navegação -->
    <header class="header" role="banner">
      <div class="container header-inner">
        <a href="<?php echo $base_path; ?>index.php" aria-label="Ir para a página inicial">
          <img
            src="<?php echo $base_path; ?>assets/img/universo-down-logo.svg"
            alt="Universo Down"
            class="logo"
            width="120"
            height="72"
          />
        </a>
        <nav id="nav" aria-label="Navegação principal">
          <button id="menuToggle" aria-label="Abrir menu de navegação" aria-expanded="false" aria-controls="navMenu">
            ☰
          </button>
          <ul id="navMenu" role="list">
            <li><a class="<?php echo $current_page === 'home'             ? 'active' : ''; ?>" href="<?php echo $base_path; ?>index.php"                      <?php echo $current_page === 'home'             ? 'aria-current="page"' : ''; ?>>Home</a></li>
            <li><a class="<?php echo $current_page === 'sindrome-de-down' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/sindrome-de-down.php"     <?php echo $current_page === 'sindrome-de-down' ? 'aria-current="page"' : ''; ?>>Síndrome de Down</a></li>
            <li><a class="<?php echo $current_page === 'quem-somos'       ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/quem-somos.php"           <?php echo $current_page === 'quem-somos'       ? 'aria-current="page"' : ''; ?>>Quem Somos</a></li>
            <li><a class="<?php echo $current_page === 'areas'            ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/areas.php"                <?php echo $current_page === 'areas'            ? 'aria-current="page"' : ''; ?>>Áreas</a></li>
            <li><a class="<?php echo $current_page === 'autonomia'        ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/autonomia.php"            <?php echo $current_page === 'autonomia'        ? 'aria-current="page"' : ''; ?>>Autonomia</a></li>
            <li><a class="<?php echo $current_page === 'transparencia'     ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/transparencia.php"         <?php echo $current_page === 'transparencia'     ? 'aria-current="page"' : ''; ?>>Transparência</a></li>
            <li><a class="<?php echo $current_page === 'diretoria'        ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/diretoria.php"            <?php echo $current_page === 'diretoria'        ? 'aria-current="page"' : ''; ?>>Diretoria</a></li>
            <li><a class="<?php echo $current_page === 'contato'          ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/contato.php"              <?php echo $current_page === 'contato'          ? 'aria-current="page"' : ''; ?>>Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <?php
    /**
     * Disponibiliza $hero_inline_style para as seções hero das páginas.
     * As páginas aplicam via PHP diretamente na tag <section>.
     * Exemplo de uso na página:
     *
     *   global $hero_inline_style;
     *   echo "<section class=\"page-hero\"{$hero_inline_style}>";
     *
     * Ou de forma mais limpa, usando a função helper abaixo:
     */
    function hero_style(): string {
        global $hero_inline_style;
        return $hero_inline_style ?? '';
    }
    ?>