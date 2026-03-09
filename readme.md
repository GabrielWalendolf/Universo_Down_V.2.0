# Documentação do Projeto: Universo Down V.2.0


## 1. Visão Geral

O projeto é um site institucional dinâmico desenvolvido em PHP, estruturado para apresentar as áreas de atuação, projetos, história e canais de contato da instituição. O design é responsivo, focado em acessibilidade e oferece suporte a temas claro e escuro.

## 2. Estrutura de Arquivos

A organização do projeto segue uma estrutura modular para facilitar a manutenção:

* **Raiz (`/`)**: Contém o arquivo principal `index.php` e o arquivo de controle de tarefas `readme.md`.
* **`includes/`**: Armazena os componentes globais reutilizáveis, como o cabeçalho (`header.php`) e o rodapé (`footer.php`).
* **`pages/`**: Contém as páginas específicas de conteúdo (áreas, autonomia, contato, diretoria, projetos, quem somos e informações sobre a síndrome).
* **`css/`**: Define a identidade visual através de arquivos de base, componentes, estilos específicos de páginas e definições de temas.
* **`js/`**: Scripts para interatividade das áreas, controle de tema e componentes de UI.
* **`assets/img/`**: Recursos visuais, incluindo logotipos das ODS e imagens de teste.

## 3. Funcionalidades Principais

### 3.1. Navegação Dinâmica e Identidade Visual

* **Gerenciamento de Caminhos**: Utiliza a variável `$base_path` para garantir que os links de ativos (CSS/JS) funcionem corretamente tanto na raiz quanto em subpastas.
* **Sistema de Temas**: Suporte a Dark Mode e Light Mode através de variáveis CSS (Design Tokens) e persistência no `localStorage` via `theme.js`.
* **Responsividade**: Menu mobile estilo "hambúrguer" para telas menores, implementado em `components.js` e estilizado em `components.css`.

### 3.2. Módulos de Conteúdo

* **Áreas de Atuação**: Interface interativa que permite alternar entre detalhes de diferentes serviços (EP, AEE, SAE, etc.) sem recarregar a página, utilizando o script `main.js`.
* **Filtro de Projetos**: Sistema de filtragem por categorias (Atuais, Eventos, Acervo) na página de projetos.
* **Seção de Autonomia**: Apresenta as frentes de desenvolvimento para independência e mercado de trabalho.

### 3.3. Interatividade e Conversão

* **Formulários**: Inclui um formulário para "Trabalhe Conosco" com validação básica e simulação de envio.
* **Doações**: Espaço dedicado para arrecadação via QR Code e integração com WhatsApp.

## 4. Tecnologias Utilizadas

* **Linguagem**: PHP (Estruturação e inclusão de módulos).
* **Estilização**: CSS3 com variáveis customizadas para temas e layout base em Grid e Flexbox.
* **Comportamento**: JavaScript Vanilla (sem frameworks externos para maior leveza).
* **Ícones**: Integração com Google Material Symbols e Flaticon (Uicons).

## 5. Status de Desenvolvimento e Manutenção

O projeto possui as seguintes necessidades:

**Em andamento**:
* Fazer a responsividade do site.

**Urgente**:
* Atualizar cards com imagens e fundos coloridos.


**Pode esperar**:
* Substituição de imagens de *placeholder* por fotos oficiais e refinamento de cores de fundo.
* Corrigir a funcionalidade do formulário de contato e o alinhamento de itens na barra superior.
* Atualizar a página com textos reais.

## 6. Configurações de Design (Design Tokens)

As cores principais são definidas no arquivo `themes.css`:

* **Azul Principal (`--brand-blue-brand`)**: `#0081BA`, utilizado no cabeçalho e rodapé.
* **Amarelo de Destaque (`--brand-yellow`)**: `#FFFF00`, utilizado para hovers e indicações de estados ativos.
* **Fundo Escuro (`--brand-dark-gray`)**: `#1F1F1F`, para o modo noturno.
