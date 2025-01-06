<?php

// Carrega o autoload do Composer para carregar as classes do PHPMailer e Dotenv
require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Carrega as variáveis do arquivo .env que está na pasta anterior
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description"
        content="Software House referência no desenvolvimento de sites, sistemas, aplicativos e automações.">
    <meta name="author" content="Felipe Passos | WEB AND MOBILE FULL STACK DEV">
    <meta name="keywords"
        content="software house, software, sistemas, programador experiente, desenvolvedor, desenvolvimento web, desenvolvimento mobile, frontend, backend, aplicativo, app, ios, android, automação, criação de sites, landing pages, programador, experiente, desenvolvimento de software, sob medida, personalizado, Aracaju, Sergipe, Brasil, alta qualidade, bom, melhor">
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="./img/logo-share.png">
    <meta property="og:description"
        content="Desenvolvimento de sites de alto padrão, sistemas, aplicativos e automações.">

    <title>Simplify Web</title>

    <link rel="icon" href="./img/logo1.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Estilos -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Estilo Ondas Background -->
    <link rel="stylesheet" href="./css/wave.css">


    <script
        src="https://www.google.com/recaptcha/enterprise.js?render=<?php echo $_ENV['RECAPTCHA_PUBLIC_KEY']; ?>"></script>

</head>
</head>

<body>

    <!-- SUCCESS/ERROR MESSAGE -->
    <?php
    if (isset($_GET['success'])) {
        // Exibe um alerta Bootstrap com a mensagem de sucesso
        echo '<div id="success-alert" class="alert alert-success fixed-alert" role="alert">' . $_GET['success'] . '</div>';
    } else if (isset($_GET['error'])) {
        // Exibe um alerta Bootstrap com a mensagem de erro
        echo '<div id="error-alert" class="alert alert-danger fixed-alert" role="alert">' . $_GET['error'] . '</div>';
    }
    ?>

    <!-- LOADER / SPLASH SCREEN -->
    <div id="fundo-loader">
        <div id="loader"></div>
        <div
            style="width: 220px; position: fixed; top:50%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
            <div class="loading-animation">
                <div class="ball ball1"></div>
                <div class="ball ball2"></div>
                <div class="ball ball3"></div>
            </div>
        </div>
    </div>

    <!-- LOGO -->
    <button id="logo" class="logo">
        <h1>FELIPE PASSOS</h1>
    </button>

    <!-- NAV BAR -->
    <nav>
        <ul>
            <div data-target="home">
                <li class="clicked"></li>
                <p class="clicked">Início</p>
            </div>
            <div data-target="sobre">
                <li></li>
                <p>Sobre</p>
            </div>
            <div data-target="portfolio">
                <li></li>
                <p>Portfolio</p>
            </div>
            <div data-target="servicos">
                <li></li>
                <p>Serviços</p>
            </div>
            <div data-target="contato">
                <li></li>
                <p>Contato</p>
            </div>
        </ul>
    </nav>

    <!-- SCROLLER ANIMATION (NOT USED) -->
    <div class="animation-container" id="scroll-ico" style="display: none;">
        <div class="scroll-indicator">
            <div class="scroll-icon-container">
                <div class="scroll-icon">
                    <div class="outer-border"></div>
                    <div class="inner-scroll"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- REDES SOCIAIS E CONTATO -->
    <div class="redes-contato">
        <ul class="redes-container">
            <li><a href="https://www.linkedin.com/in/felipe-passos-70a075138/?originalSubdomain=br"
                    target="_blank"><button><i class="fa-brands fa-linkedin-in"></i></button></a>
            </li>
            <li><a href="https://github.com/felipebpassos" target="_blank"><button><i
                            class="fa-brands fa-github"></i></button></a></li>
            <li><a href="https://www.instagram.com/simplifyweb/" target="_blank"><button><i
                            class="fa-brands fa-instagram"></i></button></a></li>
            <li id="wp">
                <a href="https://wa.me/5579996010545?text=Ol%C3%A1%2C%20vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
                    target="_blank">
                    <button><i class="fa-brands fa-whatsapp"></i></button>
                </a>
            </li>
        </ul>
    </div>

    <!-- TOGGLE MENU BUTTON -->
    <button class="toggle-menu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 16">
            <rect width="38" height="2" rx="0" ry="0" fill="white" />
            <rect y="12" width="38" height="2" rx="0" ry="0" fill="white" />
        </svg>
    </button>


    <!-- MENU -->
    <div class="menu invisible">
        <ul>
            <li><span>Início</span></li>
            <li><span>Sobre</span></li>
            <li><span>Portfolio</span></li>
            <li><span>Serviços</span></li>
            <li><span>Contato</span></li>
        </ul>
    </div>

    <div class="close-menu hidden">
        <div class="close" onmouseover="startAnimation()" onmouseout="resetAnimation()">
            <svg class="close-ring" width="61" height="61">
                <circle class="close-ring__circle" id="closeCircle" stroke="rgb(42, 217, 223)" stroke-width="2"
                    fill="transparent" r="28" cx="30" cy="30" />
                <circle class="close-ring__circle-full" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2"
                    fill="transparent" r="28" cx="30" cy="30" />
            </svg>
            <svg class="x" viewBox="0 0 12 12" style="height: 12px; width: 12px;">
                <path stroke="rgb(180, 180, 180)" fill="rgb(180, 180, 180)"
                    d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z">
                </path>
            </svg>
        </div>
    </div>

    <!-- TRANSLATOR SELECT -->
    <div class="language-translator hidden">
        <img src="./img/google_translate.png" alt="Google Translate" />
        <div class="op-language">
            <div style="margin-top: 5px;">
                <a href="#"><button><img src="./img/brazil.jpg" alt="Português (BR)"></button></a>
                <a href="./en"><button><img src="./img/en.jpg" alt="Inglês"></button></a>
            </div>
        </div>
    </div>

    <!-- HOME -->
    <section id="home">

        <main>

            <div class="apresentacao-principal">

                <div class="fluid">

                    <!--Waves Container-->
                    <div>
                        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                            <defs>
                                <path id="gentle-wave"
                                    d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                            </defs>
                            <g class="parallax">
                                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(99, 171, 194,0.7)" />
                                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(99, 171, 194,0.5)" />
                                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(99, 171, 194,0.3)" />
                                <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(99, 171, 194)" />
                            </g>
                        </svg>
                        <div class="bottom"></div>
                    </div>
                    <!--Waves end-->

                </div>

                <p class="cargo">Desenvolvedor Web e Mobile</p>
                <img src="./img/felipe_passos.png" alt="">
                <h1>Soluções<br><span id="dynamic-text" class="typed-text"></span><span class="blinking-cursor">|</span>
                </h1>
                <div class="contato-submit-box">
                    <button id="contato-submit" class="contato-submit">Fale Conosco</button>
                </div>
                <div class="descricao">
                    <p>Desenvolvedor criativo, especialista na elaboração de Sites e Landing Pages de alto padrão, até
                        softwares
                        completos e sob medida.</p>
                </div>
            </div>

        </main>

    </section>

    <!-- ABOUT -->
    <section id="sobre">

        <main>

            <div class="section-box">

                <h5 class="section-title">Sobre</h5>

                <div class="section-content">
                    <p class="texto">Com ampla experiência em projetos diversos, desde sites personalizados até o
                        desenvolvimento completo de aplicações Web e mobile, nossa missão é impulsionar seu negócio ou
                        sua ideia a
                        conquistar grandes resultados no mercado digital.</p>
                    <div class="parceiros">
                        <ul>
                            <li id="palazzo">
                                <img src="./img/palazzo.png" alt="Clínica Palazzo">
                            </li>
                            <li id="m4digital">
                                <img src="./img/m4digital.png" alt="M4Digital">
                            </li>
                            <li>
                                <img src="./img/pomar.png" alt="Pomar Polpa de Frutas">
                            </li>
                            <li id="recz">
                                <img src="./img/recz.png" alt="Recz Films">
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </main>

        <div class="saiba-mais-box">
            <div class="saiba-mais">
                <span style="display: flex; justify-content: center; align-items: center;">
                    SAIBA MAIS
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15"
                        style="margin-left: 3px;">
                        <path d="M8 5l9 7-9 7" fill="none" stroke="rgb(42, 217, 223)" stroke-width="2" />
                    </svg>
                </span>
            </div>
        </div>

        <div class="menu-sobre">
            <div>
                <ul class="opcoes">
                    <li id="sobre-mim" style="display: none;">Sobre Mim</li>
                    <li id="habilidades" style="display: none;">Habilidades</li>
                    <li id="portfolios">Portfolio</li>
                    <li id="solucoes">Soluções</li>
                </ul>
            </div>
        </div>

    </section>

    <!-- PORTFOLIO -->
    <section id="portfolio">

        <div class="portfolio">
            <div class="portfolio-container">
                <img src="./img/portfolio1.png" alt="">
                <h1>Sistemas e Apps</h1>
                <span>SOFTWARES</span>
                <span class="ver-cases">Ver Cases</span>
                <p>
                    Soluções personalizadas incluindo sistemas web, aplicativos móveis e
                    automação de processos, com foco em usabilidade e eficiência.
                </p>
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio-container">
                <img src="./img/portfolio2.png" alt="">
                <h1>Sites Profissionais</h1>
                <span>SITES E LANDING PAGES</span>
                <span class="ver-cases">Ver Cases</span>
                <p>Vitrines digitais modernass, de rápido carregamento, que prendem a atenção do cliente
                    e passam credibilidade ao seu produto ou serviço.</p>
            </div>
        </div>

    </section>

    <!-- SERVICES -->
    <section id="servicos">
        <div class="section-box">
            <h5 class="section-title">Serviços</h5>

            <div class="section-content">
                <div class="servico left" data-id="sites">
                    <h1 style="margin-bottom: 15px;">Sites e Landing Pages</h1>
                    <div class="video-servico">
                        <video class="lazy-video" muted autoplay playsinline loop width="100%">
                            <source data-src="./videos/designer.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                        <span style="text-shadow: rgba(0, 0, 0, 0.8) -0.08em 0.08em 0em;">Ver sobre</span>
                    </div>
                </div>

                <div class="servico right" data-id="softwares">
                    <h1 class="responsivo" style="margin-bottom: 15px;">Desenvolvimento de software</h1>
                    <div class="video-servico">
                        <video class="lazy-video" muted autoplay playsinline loop width="100%">
                            <source data-src="./videos/typing.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                        <span>Ver sobre</span>
                    </div>
                    <h1 class="wide">Desenvolvimento de software</h1>
                </div>

            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contato">

        <main>

            <div class="section-box contato">

                <h5 class="section-title">Contato</h5>

                <h1>Vamos Criar Algo Incrível Juntos</h1>

                <h3>Solicite um orçamento personalizado e descubra como podemos transformar suas ideias em realidade.
                </h3>

                <hr>

                <div class="foto-box"><img src="./img/perfil.png" alt="Felipe Passos"></div>

                <div class="contatos">
                    <button class="contato-btn" id="contato-btn">Fale Conosco</button>
                    <ul class="redes-sociais">
                        <li><a href="https://www.instagram.com/simplifyweb/" target="_blank"><button><i
                                        class="fa-brands fa-instagram"></i></button></a></li>
                        <li><a href="https://github.com/felipebpassos" target="_blank"><button><i
                                        class="fa-brands fa-github"></i></button></a></li>
                        <li><a href="https://www.linkedin.com/in/felipe-passos-70a075138/?originalSubdomain=br"
                                target="_blank"><button><i class="fa-brands fa-linkedin-in"></i></button></a>
                        </li>
                    </ul>
                </div>

            </div>

        </main>

    </section>

    <?php

    // Inclui pop-ups dos portfolios
    include 'components/portfolio.php';

    // Inclui pop-ups dos serviços
    include 'components/servicos.php';

    // Inclui pop-up do formulário de contato
    include 'components/contato.php';

    // Inclui outros pop-up
    include 'components/popups.php';

    ?>

    <!-- Whatsapp-button -->
    <a href="https://wa.me/5579996010545?text=Ol%C3%A1%2C%20vim%20atrav%C3%A9s%20do%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es."
        class="whatsapp-button" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
        <span>Contato</span>
    </a>

    <!-- JQUERY-3.6.4 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- JAVASCRIPT BODY -->
    <script src="./js/loading.js"></script>
    <script src="./js/typing-text.js"></script>
    <script src="./js/saiba-mais.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/scroll-parallax.js"></script>
    <script src="./js/move-img.js"></script>
    <script src="./js/close-animation.js"></script>
    <script src="./js/simple-select.js"></script>
    <script src="./js/cursor.js"></script>
    <script src="./js/popups.js"></script>
    <script src="./js/form-inputs.js"></script>
    <script src="./js/send-form.js"></script>
    <script src="./js/fade-in-element.js"></script>
    <script src="./js/accordion.js"></script>

</body>

</html>