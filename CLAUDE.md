# CLAUDE.md — Universo Down

Base de conhecimento do projeto para o Claude Code. Leia este arquivo antes de qualquer sessão.

---

## Visão Geral

Site institucional da **Universo Down**, associação de Joinville/SC que promove inclusão, autonomia e desenvolvimento para pessoas com Síndrome de Down.

- **Stack:** PHP puro + HTML + CSS + JavaScript vanilla
- **Sem framework PHP** (sem Laravel, Symfony, etc.)
- **Sem bundler** (sem Webpack, Vite, npm build steps)
- **Deploy:** upload via FTP (FileZilla) para servidor de hospedagem compartilhada
- **PHP mínimo:** 8.1+

---

## Estrutura de Pastas

```
universo-down/
├── index.php                  # Página inicial
├── send-email.php             # Backend do formulário de contato (PHPMailer)
├── config.php                 # Credenciais SMTP — NÃO commitado (.gitignore)
├── pages/                     # Páginas internas
│   ├── areas.php
│   ├── autonomia.php
│   ├── contato.php
│   ├── diretoria.php          # Existe mas NÃO está na navegação (conteúdo pendente)
│   ├── projetos.php
│   ├── quem-somos.php
│   └── sindrome-de-down.php
├── includes/                  # Componentes reutilizáveis (includes PHP)
│   ├── header.php             # <head> + topbar + nav + hero
│   ├── footer.php             # Rodapé + scripts globais
│   ├── head-meta.php          # Meta tags SEO, Open Graph, favicon
│   └── scripts.php            # Scripts do rodapé (permite $extra_scripts)
├── lib/
│   └── phpmailer/             # PHPMailer (instalação manual, sem Composer)
│       ├── PHPMailer.php
│       ├── SMTP.php
│       └── Exception.php
├── assets/
│   ├── css/
│   │   ├── base.css           # Reset e utilitários globais
│   │   ├── components.css     # Cards, botões, nav, hero
│   │   ├── pages.css          # Estilos específicos por página
│   │   └── themes.css         # Design tokens (variáveis CSS) + tema claro/escuro
│   ├── js/
│   │   ├── main.js            # Lógica global
│   │   ├── components.js      # Comportamento de componentes (cards, filtros)
│   │   └── theme.js           # Toggle claro/escuro
│   └── img/
│       ├── favicon.png        # Favicon do site (planetinha)
│       ├── qrcode/            # QR Code para doação
│       ├── empresas_parceiras/# Logos dos parceiros
│       ├── hero/              # Imagens dos heroes
│       ├── espacos/           # Fotos dos espaços
│       ├── uploads/           # Imagens enviadas (ignorado pelo git)
│       └── universo-down-logo.svg
├── .gitignore
└── CLAUDE.md
```

---

## Arquitetura e Convenções

### Padrão de página

Toda página segue este padrão obrigatório:

```php
<?php
$page_title       = 'Título da Página | Universo Down';
$meta_description = 'Descrição com até ~155 caracteres para SEO.';
$base_path        = '../';          // '../' para pages/, '' para raiz
$current_page     = 'slug-pagina'; // usado para marcar nav ativa
$hero_image       = 'assets/img/hero-nome.jpg'; // opcional

include '../includes/header.php';
?>

<main>
  <!-- conteúdo -->
</main>

<?php include '../includes/footer.php'; ?>
```

- `index.php` usa `$base_path = ''` e `include 'includes/header.php'`
- Páginas em `pages/` usam `$base_path = '../'` e `include '../includes/header.php'`

### Includes e componentes

- **Nunca** duplicar `<script>`, `<footer>` ou meta tags dentro de uma página
- Toda lógica de rodapé vai em `includes/footer.php`
- Scripts extras por página usam a variável `$extra_scripts`:

```php
$extra_scripts = ['assets/js/minha-pagina.js'];
include '../includes/footer.php';
```

### Links internos

- Sempre usar extensão `.php` nos links (nunca `.html`)
- Usar `$base_path` para caminhos relativos:

```php
<a href="<?php echo $base_path; ?>pages/contato.php">Contato</a>
```

### CSS

- Design tokens definidos em `base.css` como variáveis CSS (`--color-primary`, etc.)
- Nunca usar valores hardcoded de cor ou espaçamento — sempre referenciar variáveis
- Responsividade com `clamp()` e media queries
- Tema claro/escuro controlado por `themes.css` + `theme.js`

### JavaScript

- Vanilla JS puro — sem jQuery, sem React, sem nenhuma biblioteca
- Nenhum `document.write()` ou manipulação direta de `innerHTML` com dados externos

---

## SEO

- Cada página deve ter `$meta_description` única com até 155 caracteres
- `head-meta.php` gera automaticamente: meta description, Open Graph, Twitter Card, canonical
- Imagens devem ter atributo `alt` descritivo
- Imagens fora da dobra devem ter `loading="lazy"`

---

## Formulário de Contato

- `contato.php` tem o formulário HTML + botão WhatsApp + seção de doação (QR Code + Pix)
- `send-email.php` processa o envio via **PHPMailer + Gmail SMTP**
- Credenciais em `config.php` (não commitado): `SMTP_USER`, `SMTP_PASS`, `MAIL_TO`
- WhatsApp: `(47) 99283-1569` — já configurado em `contato.php` e `footer.php`
- Pix CNPJ: `81144099000105` — com botão "copiar" em `contato.php`

---

## Conteúdo Pendente (não alterar estrutura, apenas preencher)

- Fotos e nomes da diretoria em `diretoria.php` (página oculta da nav até estar pronta)
- Textos reais nas páginas `autonomia.php` e `sindrome-de-down.php`

---

## Deploy

- Upload via FTP com FileZilla mantendo a estrutura de pastas exatamente como está
- O arquivo `config.php` (credenciais) **nunca** vai para o repositório — está no `.gitignore`
- Pasta `assets/img/uploads/` está no `.gitignore` mas deve existir no servidor

---

## O que nunca fazer

- Não introduzir novas dependências npm ou Composer sem alinhamento prévio (PHPMailer já está em `lib/phpmailer/` via instalação manual)
- Não usar links `.html` — o site usa `.php` em todas as páginas
- Não duplicar footer, scripts ou meta tags dentro das páginas
- Não commitar `config.php`, `.env` ou arquivos com credenciais
- Não alterar os design tokens em `base.css` sem revisar impacto global