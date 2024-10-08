<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplify Web</title>
    <link rel="icon" href="./img/logo1.ico">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/wave.css">
    <script src="./js/accordion-pre-set.js"></script>
</head>

<body>

    <div id="fundo-loader">
        <div id="loader"></div>
        <div
            style="width: 220px; position: fixed; top:70%; left: 50%; transform: translate(-50%, -50%); z-index: 9999;">
            <div class="loading-animation">
                <div class="ball ball1"></div>
                <div class="ball ball2"></div>
                <div class="ball ball3"></div>
            </div>
        </div>
    </div>

    <button id="logo" class="logo">
        <h1 style="font-size: 26px;">S<div
                style="margin-left: 5px; height: 7px; width: 7px; background-color: rgb(33, 156, 160); border-radius: 50%;">
            </div>W</h1>
    </button>

    <nav>
        <ul>
            <div data-target="home">
                <li class="clicked"></li>
                <p class="clicked">Start</p>
            </div>
            <div data-target="sobre">
                <li></li>
                <p>About</p>
            </div>
            <div data-target="portfolio">
                <li></li>
                <p>Portfolio</p>
            </div>
            <div data-target="servicos">
                <li></li>
                <p>Services</p>
            </div>
            <div data-target="contato">
                <li></li>
                <p>Contact</p>
            </div>
        </ul>
    </nav>

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

    <button class="toggle-menu">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 16">
            <rect width="38" height="2" rx="0" ry="0" fill="white" />
            <rect y="12" width="38" height="2" rx="0" ry="0" fill="white" />
        </svg>
    </button>


    <div class="menu hidden">
        <ul>
            <li>Start</li>
            <li>About</li>
            <li>Portfolio</li>
            <li>Services</li>
            <li>Contact</li>
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

    <div class="language-translator">
        <img src="./img/google_translate.png" alt="Google Translate" />
        <div class="op-language">
            <div style="margin-top: 5px;">
                <a href="../"><button><img src="./img/brazil.jpg" alt="Portuguese (BR)"></button></a>
                <a href="#"><button><img src="./img/en.jpg" alt="English"></button></a>
            </div>
        </div>
    </div>

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

                <p class="cargo">Felipe Passos | Full Stack Developer</p>
                <img src="./img/programmer.png" alt="">
                <h1>Web Solutions to<br>Maximize Your<br>Business</h1>
                <div class="contato-submit-box">
                    <button id="contato-submit" class="contato-submit">Contact me</button>
                </div>
                <div class="descricao">
                    <p>Creative web developer, specialized in crafting everything from high-quality Landing Pages to
                        full and customized Web Applications.</p>
                </div>
            </div>

        </main>

    </section>

    <section id="sobre">

        <main>

            <div class="section-box">

                <h5 class="section-title">About</h5>

                <div class="section-content">
                    <p class="texto">With extensive experience in various projects, ranging from custom websites to the
                        complete development of robust web software, our goal is to propel your company
                        to achieve great results in the growing and broad digital market.</p>
                    <div class="parceiros">
                        <ul>
                            <li id="palazzo">
                                <img src="./img/palazzo.png" alt="Clínica Palazzo">
                            </li>
                            <li id="ultimate">
                                <img src="./img/ultimate-logo.png" alt="Ultimate Members">
                            </li>
                            <li>
                                <img src="./img/pomar.png" alt="Pomar Polpa de Frutas">
                            </li>
                            <li id="vip">
                                <img src="./img/vip.png" alt="VIP Informática">
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
            <div style="position: relative; height: 100%; margin-left: 60px; margin-right: 30px;">
                <ul class="opcoes">
                    <li id="sobre-mim" style="display: none;">Sobre Mim</li>
                    <li id="habilidades" style="display: none;">Habilidades</li>
                    <li id="portfolios">Portfolio</li>
                    <li id="solucoes">Solutions</li>
                </ul>
            </div>
        </div>

    </section>

    <section id="portfolio">

        <div class="portfolio">
            <div class="portfolio-container">
                <img src="./img/portfolio1.jpg" alt="">
                <h1>Plataforma e-learning</h1>
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio-container">
                <img src="./img/portfolio2.png" alt="">
                <h1>Página de vendas</h1>
            </div>
        </div>

    </section>

    <section id="servicos">
        <div class="section-box">
            <h5 class="section-title">Services</h5>

            <div class="section-content">
                <div class="servico left" data-id="sites">
                    <h1 style="margin-bottom: 15px;">Sites e Landing Pages</h1>
                    <div class="video-servico">
                        <video autoplay muted loop width="100%">
                            <source src="./videos/designer.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                        <span style="text-shadow: rgba(0, 0, 0, 0.8) -0.08em 0.08em 0em;">Ver sobre</span>
                    </div>
                </div>

                <div class="servico right" data-id="marketing">
                    <div class="video-servico">
                        <video autoplay muted loop width="100%">
                            <source src="./videos/management.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                        <span>Ver sobre</span>
                    </div>
                    <h1 style="margin-bottom: 15px;">Consultoria Digital<br>e Marketing</h1>
                </div>

                <div class="servico left last" data-id="softwares">
                    <h1 style="margin-bottom: 15px;">Aplicações Web e Mobile</h1>
                    <div class="video-servico">
                        <video autoplay muted loop width="100%">
                            <source src="./videos/typing.mp4" type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                        <span>Ver sobre</span>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="contato">

        <main>

            <div class="section-box contato">

                <h5 class="section-title">Contact</h5>

                <h1>Let's Create Something Amazing Together</h1>

                <h3>Send us your inquiry and find out how we can bring your ideas to reality.
                </h3>

                <hr>

                <div class="foto-box"><img src="./img/perfil.png" alt="Felipe Passos"></div>

                <div class="contatos">
                    <button class="contato-btn" id="contato-btn">Contact me</button>
                    <ul class="redes-sociais">
                        <li><a href="https://www.instagram.com/simplifyweb/" target="_blank"><button><i
                                        class="fa-brands fa-instagram"></i></button></a></li>
                        <li><a href="" target="_blank"><button><i class="fa-brands fa-github"></i></button></a></li>
                        <li><a href="" target="_blank"><button><i class="fa-brands fa-linkedin-in"></i></button></a>
                        </li>
                        <li><a href="https://dribbble.com/simplifyweb" target="_blank"><button><i
                                        class="fa-brands fa-dribbble"></i></button></a></li>
                    </ul>
                </div>

            </div>

        </main>

    </section>

    <div class="popup hidden" id="sobre-mim-popup">

        <div class="close-popup">
            <div class="close" id="close-sobre-mim" onmouseover="startAnimation()" onmouseout="resetAnimation()">
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

    </div>

    <div class="popup hidden" id="habilidades-popup">

        <div class="close-popup">
            <div class="close" id="close-habilidades" onmouseover="startAnimation()" onmouseout="resetAnimation()">
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

    </div>

    <div class="popup hidden" id="portfolio-popup">

        <div class="close-popup">
            <div class="close" id="close-portfolio" onmouseover="startAnimation()" onmouseout="resetAnimation()">
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

    </div>

    <div class="popup hidden" id="servico-popup">

        <div class="close-popup">
            <div class="close" id="close-servico" onmouseover="startAnimation()" onmouseout="resetAnimation()">
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

        <div id="sites" class="hidden" style="width: fit-content; margin: 0 auto;">

            <h2 class="title">Sites e Landing Pages</h2>

            <p class="texto" style="width: 800px;">Criamos designs personalizados de alto padrão que não apenas
                impressionam
                visualmente, mas também são cuidadosamente planejados para aumentar suas taxas de conversão.</p>

            <ul class="accordion-1">
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Experiência do usuário fluida e intuitiva</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Aumente as taxas de conversão do seu produto ou serviço com landing pages que proporcionam
                            uma
                            boa experiência do usuário -
                            interfaces amigáveis, modernas e de rápido carregamento - e através de um posicionamento
                            estratégico de
                            elementos e mensagens na tela.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Maior visibilidade no Google</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Utilizando técinas avançadas de SEO (Search Engine Optimization), melhoramos a visibilidade
                            do
                            seu site no Google e nos demais motores de busca, atraindo novos
                            clientes de maneira orgânica.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Adaptabilidade a todos os dispositivos e telas</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Seu site ou landing page será compatível a todos os dispositivos e navegadores, com
                            interfaces
                            que se adaptam a qualquer tamanho e formato de tela.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Copywriting objetivo e assertivo</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Cative e engaje seu público-alvo com mensagens claras, persuasivas e orientadas para uma
                            venda ou
                            qualquer outra ação.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Painel de edição de conteúdo</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Atualize seções do seu site sem necessidade de código, através de um painel administrativo
                            simples e intuitivo</p>
                    </div>
                </div>
            </ul>

        </div>

        <div id="marketing" class="hidden" style=" width: fit-content; margin: 0 auto;">

            <h2 class="title">Consultoria Digital e Marketing</h2>

            <p class="texto" style="width: 800px;"></p>

            <ul class="accordion-1">
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Pesquisa de mercado e posicionamento de marca</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Compreender o mercado-alvo, analisar concorrentes e identificar oportunidades estratégicas
                            para posicionar a marca de forma relevante e diferenciada.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Estruturação e estratégias para uma boa Presença Digital</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Desenvolvimento de estratégias de marketing sob medida para o modelo e realidade do seu
                            negócio.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Gestão de Redes Sociais</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Construção e manutenção de uma presença forte e engajada nas redes sociais</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Produção de criativos para anúncios</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Criação de vídeos impactantes e persuasivos para anúncios nas redes sociais para promover sua
                            marca ou produto.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Campanhas e Gestão de Anúncios ADS</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Com a gestão de seus anúncios online, alcançamos seu público-alvo de maneira direcionada e
                            eficiente.</p>
                    </div>
                </div>
            </ul>

        </div>

        <div id="softwares" class="hidden" style="width: fit-content; margin: 0 auto;">

            <h2 class="title">Aplicações Web e Mobile</h2>

            <p class="texto" style="width: 800px;">Nossos softwares são projetados e desenvolvidos para atender às
                necessidades específicas de cada negócio, oferecendo soluções eficientes, personalizadas e com
                segurança.</p>

            <ul class="accordion-1">
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>E-commerces, sistemas de gestão diversos, automações</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p></p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Segurança da informação e controle de permissões</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Implementação de medidas de segurança avançadas e controle de permissões para garantir a
                            proteção dos dados e a integridade do seu sistema.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Projetos escaláveis</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Desenvolvimento de projetos escaláveis, capazes de crescer e se adaptar conforme as demandas
                            crescem.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Integrações com sistemas de terceiros</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Conectamos seu sistema com APIs de terceiros, proporcionando uma interoperabilidade e o
                            funcionamento harmonioso do seu sistema com outras plataformas do mercado.</p>
                    </div>
                </div>
                <div class="trabalho">
                    <li>
                        <p><span class="mark"></span>Suporte e manutenção</p>
                        <svg width="18" height="12" viewBox="0 0 42 25">
                            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <div class="explicacao">
                        <p>Oferecemos suporte e serviços de manutenção gratuitos por 6 meses contados a partir da
                            entrega, garantindo assim o funcionamento ideal do seu sistema.</p>
                    </div>
                </div>
            </ul>

        </div>

    </div>

    <div class="popup hidden" id="contato-form">

        <div class="close-popup">
            <div class="close" id="close-contato" onmouseover="startAnimation()" onmouseout="resetAnimation()">
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

        <div class="formulario">
            <div class="row">
                <form action="">
                    <h5 class="section-title" style="padding: 0 15px; margin-bottom: 20px;">Contact</h5>
                    <h3>Got a project? Drop me a line if you want to work together on something exciting.
                        Big or
                        small. Web or Mobile.</h3>
                    <div class="row">
                        <div class="m-3 col">
                            <label for="nome">Your name</label>
                            <input type="text" id="nome" name="nome" placeholder="What's your name?" required>
                        </div>
                        <div class="m-3 col">
                            <label for="email">Your email</label>
                            <input type="email" id="email" name="email" placeholder="What's your email address?"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="m-3 col">
                            <label for="">Service</label>
                            <input type="text" placeholder="What are you interested in?">
                        </div>
                        <div class="m-3 col">
                            <label for="">Budget</label>
                            <input type="text" placeholder="What's your budget?">
                        </div>
                    </div>
                    <div class="message-box">
                        <label for="mensagem">Message</label>
                        <textarea id="mensagem" name="mensagem"></textarea>
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: start;">
                        <button type="submit">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20"
                                enable-background="new 0 0 20 20" space="preserve">
                                <path fill="#ffffff"
                                    d="M16,17H4a2,2,0,0,1-2-2V5A2,2,0,0,1,4,3H16a2,2,0,0,1,2,2V15A2,2,0,0,1,16,17Zm0-2V7.619l-6,4.242L4,7.619V15H16ZM4,5V5.705l6,3.429,6-3.429V5H4Z">
                                </path>
                            </svg>
                            Send message
                        </button>
                        <div class="g-recaptcha" data-sitekey=""
                            style="margin-left: 15px; margin-bottom: 30px;" data-theme="dark"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <a href="https://api.whatsapp.com/send?phone=5579996010545" class="whatsapp-button" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
        <span>Contact</span>
    </a>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="./js/loading.js"></script>
    <script src="./js/saiba-mais.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/scroll-parallax.js"></script>
    <script src="./js/move-img.js"></script>
    <script src="./js/close-animation.js"></script>
    <script src="./js/cursor.js"></script>
    <script src="./js/popups.js"></script>
    <script src="./js/accordion.js"></script>

</body>

</html>