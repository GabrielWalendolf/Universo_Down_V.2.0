<?php
// Define valores padrão caso não sejam passados pela página
$page_title = isset($page_title) ? $page_title : 'Universo Down';
$base_path = isset($base_path) ? $base_path : '';
$current_page = isset($current_page) ? $current_page : 'home';
?>
<!doctype html>
<html lang="pt-BR" data-theme="light">
  <head>
    <meta charset="UTF-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>


    <link rel="stylesheet" href="<?php echo $base_path; ?>css/base.css" />
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/themes.css" />
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/components.css" />
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/pages.css" />
  </head>
  <body>
    <div class="topbar">
      <div class="container topbar-inner">
        <div class="topbar-left">
          <span>
            <i class="fi fi-sr-phone-call"></i>
            <a href="tel:+550000000000">00 0000-0000</a> |
            <i class="fi fi-sr-envelope"></i>
            <a href="mailto:contato@universodown.org">contato@universodown.org</a>
          </span>
        </div>
        <div class="images-topbar-center">
          <img src="<?php echo $base_path; ?>assets/img/ods_3.png" alt="ods 3" class="images-ods-topbar" />
          <img src="<?php echo $base_path; ?>assets/img/ods_4.jpg" alt="ods 4" class="images-ods-topbar" />
          <img src="<?php echo $base_path; ?>assets/img/ods_8.png" alt="ods 8" class="images-ods-topbar" />
          <img src="<?php echo $base_path; ?>assets/img/ods_11.png" alt="ods 11" class="images-ods-topbar" />
        </div>
        <div class="header-actions">
          <div class="social-links" aria-label="Redes sociais">
             <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fi fi-brands-linkedin"></i></a>
             <a href="https://www.instagram.com" target="_blank" rel="noopener" aria-label="Instagram"><i class="fi fi-brands-instagram"></i></a>
             <a href="https://www.facebook.com" target="_blank" rel="noopener" aria-label="Facebook"><i class="fi fi-brands-facebook"></i></a>
          </div>
          <button id="themeToggle" aria-label="Alternar tema">
            <span class="material-symbols-outlined">dark_mode</span>
          </button>
        </div>
      </div>
    </div>

    <header class="header">
      <div class="container header-inner">
        <img src="<?php echo $base_path; ?>assets/img/logo-placeholder.svg" alt="Universo Down" class="logo" />
        <nav id="nav">
          <button id="menuToggle" aria-label="Abrir menu">☰</button>
          <ul>
            <li><a class="<?php echo $current_page == 'home' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>index.php">Home</a></li>
            <li><a class="<?php echo $current_page == 'sindrome-de-down' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/sindrome-de-down.php">Síndrome de Down</a></li>
            <li><a class="<?php echo $current_page == 'quem-somos' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/quem-somos.php">Quem Somos</a></li>
            <li><a class="<?php echo $current_page == 'areas' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/areas.php">Áreas</a></li>
            <li><a class="<?php echo $current_page == 'autonomia' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/autonomia.php">Autonomia</a></li>
            <li><a class="<?php echo $current_page == 'projetos' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/projetos.php">Projetos</a></li>
            <li><a class="<?php echo $current_page == 'diretoria' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/diretoria.php">Diretoria</a></li>
            <li><a class="<?php echo $current_page == 'contato' ? 'active' : ''; ?>" href="<?php echo $base_path; ?>pages/contato.php">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>