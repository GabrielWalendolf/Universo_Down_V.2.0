<?php
/**
 * includes/head-meta.php — <head> centralizado
 * Variáveis: $page_title, $meta_description, $base_path, $og_image
 */
$page_title       = isset($page_title)       ? $page_title       : 'Universo Down';
$meta_description = isset($meta_description) ? $meta_description : 'Universo Down — Inclusão, autonomia e desenvolvimento para pessoas com Síndrome de Down em Joinville/SC.';
$base_path        = isset($base_path)        ? $base_path        : '';
$og_image         = isset($og_image)         ? $og_image         : $base_path . 'assets/img/og-default.jpg';

$protocol    = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host        = $_SERVER['HTTP_HOST'] ?? 'universodown.org';
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$canonical   = $protocol . '://' . $host . $request_uri;
?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- SEO básico -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>" />
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>" />

  <!-- Open Graph -->
  <meta property="og:type"        content="website" />
  <meta property="og:site_name"   content="Universo Down" />
  <meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>" />
  <meta property="og:image"       content="<?php echo htmlspecialchars($og_image); ?>" />
  <meta property="og:url"         content="<?php echo htmlspecialchars($canonical); ?>" />

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image" />
  <meta name="twitter:title"       content="<?php echo htmlspecialchars($page_title); ?>" />
  <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>" />
  <meta name="twitter:image"       content="<?php echo htmlspecialchars($og_image); ?>" />

  <!-- Identidade e favicon -->
  <meta name="theme-color" content="#132355" />
  <link rel="icon" type="image/png" href="<?php echo $base_path; ?>assets/img/favicon.png" sizes="32x32" />
  <link rel="apple-touch-icon" href="<?php echo $base_path; ?>assets/img/apple-touch-icon.png" />

  <!-- Performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://cdn-uicons.flaticon.com" />

  <!-- Fontes da marca: Baloo 2 (títulos) + Nunito (texto) -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <!-- Ícones -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css" />

  <!-- CSS do projeto -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/themes.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/base.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/components.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/pages.css" />
