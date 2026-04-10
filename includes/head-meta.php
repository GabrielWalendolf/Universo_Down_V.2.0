<?php
/**
 * includes/head-meta.php
 *
 * Bloco de <head> centralizado. Todas as variáveis têm fallback seguro,
 * então nenhuma página quebra se esquecer de declarar alguma.
 *
 * Variáveis esperadas (declarar ANTES do include do header.php):
 *   $page_title       — <title> da página
 *   $meta_description — descrição para SEO e compartilhamento
 *   $base_path        — caminho relativo até a raiz ('', '../', etc.)
 *   $og_image         — imagem para Open Graph (compartilhamento social)
 *                       se omitida, usa a imagem padrão da instituição
 */

// ── Fallbacks ──────────────────────────────────────────────────────
$page_title       = isset($page_title)       ? $page_title       : 'Universo Down';
$meta_description = isset($meta_description) ? $meta_description : 'Universo Down — Inclusão, autonomia e desenvolvimento para pessoas com Síndrome de Down em Joinville/SC.';
$base_path        = isset($base_path)        ? $base_path        : '';
$og_image         = isset($og_image)         ? $og_image         : $base_path . 'assets/img/og-default.jpg';

// URL canônica — monta automaticamente a partir do servidor
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

  <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
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
  <meta name="theme-color" content="#0081BA" />
  <link rel="icon"             type="image/svg+xml"  href="<?php echo $base_path; ?>assets/img/favicon.svg" />
  <link rel="icon"             type="image/png"      href="<?php echo $base_path; ?>assets/img/favicon.png" sizes="32x32" />
  <link rel="apple-touch-icon"                       href="<?php echo $base_path; ?>assets/img/apple-touch-icon.png" />

  <!-- Performance: pré-conecta aos domínios de fontes externas -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://cdn-uicons.flaticon.com" />

  <!-- Fontes e ícones -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css" />
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css" />

  <!-- CSS do projeto -->
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/themes.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/base.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/components.css" />
  <link rel="stylesheet" href="<?php echo $base_path; ?>css/pages.css" />