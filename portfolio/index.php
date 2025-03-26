<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="XXXXXXXXXXXXXXXXXXXXXXXXX">
    <meta name="author" content="Felipe Passos | WEB AND MOBILE FULL STACK DEV">
    <meta name="keywords"
        content="portfolio, trabalhos, felipe passos, software, sistemas, programador experiente, desenvolvedor, desenvolvimento web, desenvolvimento mobile, frontend, backend, aplicativo, app, ios, android, automação, criação de sites, landing pages, programador">
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="../img/logo-share.png">
    <meta property="og:title" content="Portfolio">
    <meta property="og:description"
        content="Desenvolvimento de sites de alto padrão, sistemas, aplicativos e automações.">

    <title>Portfolio | Felipe Passos</title>

    <link rel="icon" href="./img/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php
    $portfolioData = [
        'apps' => [
            [
                'image' => './img/apps_e_sistemas/a3.png',
                'title' => 'Atende+',
                'links' => [
                    ['url' => 'https://www.youtube.com/shorts/MNBTZz9jIx4', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/AtendeMais', 'text' => 'Readme']
                ],
                'description' => 'Aplicativo móvel marketplace de telemedicina para agendamentos e consultas online com profissionais cadastrados na plataforma.',
                'tech' => ['React Native', 'Node.js', 'Express', 'API REST', 'JWT', 'MySQL', 'Redis', 'Redux', 'AWS S3', 'Websockets', 'WebRTC', 'PeerJS']
            ],
            [
                'image' => './img/apps_e_sistemas/a2.png',
                'title' => 'Ultimate Members',
                'links' => [
                    ['url' => 'https://members-area-react-ts-tailwind.vercel.app', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/members-area-react-ts-tailwind', 'text' => 'Repositório']
                ],
                'description' => 'email: felipebpassos@gmail.com | senha: senha123 <br><br> Plataforma Web de Área de Membros privada para cursos online. Oferece uma experiência imersiva com um design arrojado e moderno, inspirado em plataformas de streaming como Disney+ e Netflix.',
                'tech' => ['React', 'TypeScript', 'Node.js', 'Express', 'API REST', 'JWT', 'MySQL', 'AWS S3', 'Swagger', 'Tailwind CSS']
            ],
            [
                'image' => './img/apps_e_sistemas/a5.png',
                'title' => 'VIP Informática',
                'links' => [
                    ['url' => 'https://vipinformatica.felipepassos.dev', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/vipinformatica', 'text' => 'Repositório']
                ],
                'description' => 'Site institucional com formulário interativo no formato de ChatBot e sistema de abertura de chamados, incluindo um painel para administradores e clientes.',
                'tech' => ['Next.js', 'TypeScript', 'Tailwind CSS', 'PHP', 'API REST', 'JWT', 'MySQL']
            ],
            [
                'image' => './img/apps_e_sistemas/a1.png',
                'title' => 'Pomar do Brasil',
                'links' => [
                    ['url' => 'https://pomardobrasil.com.br', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/pomar', 'text' => 'Repositório']
                ],
                'description' => 'E-commerce simples e site institucional para uma das maiores fábricas de polpa de frutas do Nordeste: Pomar do Brasil. Apresenta um catálogo de produtos onde os usuários podem navegar pelos itens, adicioná-los ao carrinho e enviar seu pedido via WhatsApp.',
                'tech' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'MySQL']
            ],
            [
                'image' => './img/apps_e_sistemas/a4.png',
                'title' => 'Pesquisa Viral',
                'links' => [
                    ['url' => 'https://pesquisaviral.com', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/pesquisaviral', 'text' => 'Repositório']
                ],
                'description' => 'Web App que permite filtrar posts e visualizar métricas de desempenho de qualquer conta business no Instagram, além de permitir download da media dos posts.',
                'tech' => ['PHP MVC', 'JavaScript', 'JQuery', 'Bootstrap', 'OAuth2', 'Instagram GraphAPI', 'MongoDB']
            ]
        ],
        'sites' => [
            [
                'image' => './img/sites_e_lp/s1.png',
                'title' => 'Site de Portfolio',
                'links' => [
                    ['url' => 'https://felipepassos.dev', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/My-Portfolio-Website', 'text' => 'Repositório']
                ],
                'description' => 'Site de portfólio moderno, minimalista e visualmente atraente com uma experiência de parallax suave e sem barra de rolagem.',
                'tech' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'JQuery', 'Bootstrap', 'MySQL']
            ],
            [
                'image' => './img/apps_e_sistemas/a5.png',
                'title' => 'VIP Informática',
                'links' => [
                    ['url' => 'https://vipinformatica.felipepassos.dev', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/vipinformatica', 'text' => 'Repositório']
                ],
                'description' => 'Site institucional com formulário interativo no formato de ChatBot e sistema de abertura de chamados, incluindo um painel para administradores e clientes.',
                'tech' => ['Next.js', 'TypeScript', 'Tailwind CSS', 'PHP', 'API REST', 'JWT', 'MySQL']
            ],
            [
                'image' => './img/apps_e_sistemas/a1.png',
                'title' => 'Pomar do Brasil',
                'links' => [
                    ['url' => 'https://pomardobrasil.com.br', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/pomar', 'text' => 'Repositório']
                ],
                'description' => 'E-commerce simples e site institucional para uma das maiores fábricas de polpa de frutas do Nordeste: Pomar do Brasil. Apresenta um catálogo de produtos onde os usuários podem navegar pelos itens, adicioná-los ao carrinho e enviar seu pedido via WhatsApp.',
                'tech' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'MySQL']
            ],
            [
                'image' => './img/sites_e_lp/s2.png',
                'title' => 'REC Viral',
                'links' => [
                    ['url' => 'https://paidorec.com/recviral', 'text' => 'Demo'],
                    ['url' => '#', 'text' => 'Repositório']
                ],
                'description' => 'Landing Page de alto padrão e rápido carregamento, com design arrojado e animações fluidas para o curso REC Viral.',
                'tech' => ['HTML', 'CSS', 'JavaScript', 'Bootstrap']
            ],
            [
                'image' => './img/sites_e_lp/s3.png',
                'title' => 'Recz Films',
                'links' => [
                    ['url' => 'https://reczfilms.com', 'text' => 'Demo'],
                    ['url' => '#', 'text' => 'Repositório']
                ],
                'description' => 'Landing Page moderna e de alto padrão para a produtora Recz Films, com formulário de contato e envio direto para e-mail.',
                'tech' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'Bootstrap']
            ],
            [
                'image' => './img/sites_e_lp/s4.png',
                'title' => 'Psicóloga Gabriela Castro',
                'links' => [
                    ['url' => 'https://psigabrielacastro.com.br', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/Website-and-Blog', 'text' => 'Repositório']
                ],
                'description' => 'Site profissional de psicóloga e blog desenvolvido em PHP MVC, que inclui SEO otimizado e layout moderno que destacam sua identidade visual.',
                'tech' => ['PHP MVC', 'HTML', 'CSS', 'JavaScript', 'JQuery', 'Bootstrap']
            ],
            [
                'image' => './img/sites_e_lp/s5.png',
                'title' => 'Psicóloga Paula Pontes',
                'links' => [
                    ['url' => 'https://psipaulapontes.com', 'text' => 'Demo'],
                    ['url' => 'https://github.com/felipebpassos/paula', 'text' => 'Repositório']
                ],
                'description' => 'Site profissional de psicóloga responsivo, que inclui SEO otimizado e layout moderno que destacam sua identidade visual.',
                'tech' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'Bootstrap']
            ]
        ]
    ];
    ?>

    <div class="tabs">
        <div class="tab active" onclick="showTab('apps')">Sistemas e Apps</div>
        <div class="tab" onclick="showTab('sites')">Sites Profissionais</div>
    </div>

    <main>
        <div class="container">
            <?php foreach ($portfolioData as $category => $projects): ?>
                <div class="content" id="<?= $category ?>" style="display: <?= $category === 'apps' ? 'grid' : 'none' ?>;">
                    <?php foreach ($projects as $project): ?>
                        <div class="project">
                            <div class="media">
                                <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                            </div>
                            <div class="description">
                                <h3><?= $project['title'] ?></h3>
                                <div class="links">
                                    <?php foreach ($project['links'] as $link): ?>
                                        <a href="<?= $link['url'] ?>" target="_blank">
                                            <i
                                                class="<?= stripos($link['text'], 'demo') !== false ? 'fa-solid fa-link' : 'fa-brands fa-github' ?>"></i>
                                            <?= $link['text'] ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <p><?= $project['description'] ?></p>
                                <ul class="tech-list">
                                    <?php foreach ($project['tech'] as $tech): ?>
                                        <li><?= $tech ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function showTab(category) {
                // Remove a classe 'active' de todas as abas
                document.querySelectorAll(".tab").forEach(tab => tab.classList.remove("active"));

                // Adiciona a classe 'active' à aba selecionada
                document.querySelector(`.tab[onclick="showTab('${category}')"]`).classList.add("active");

                // Esconde todos os conteúdos
                document.querySelectorAll(".content").forEach(content => content.style.display = "none");

                // Exibe o conteúdo da aba selecionada
                document.getElementById(category).style.display = "grid";

                // Atualiza a URL com a hash correspondente
                window.location.hash = category;

                // Volta ao topo da página
                window.scrollTo({ top: 0, behavior: "smooth" });
            }

            // Verifica a URL ao carregar a página
            if (window.location.hash === "#sites") {
                showTab("sites");
            } else {
                showTab("apps");
            }

            // Permite alternar entre abas ao clicar nelas
            document.querySelectorAll(".tab").forEach(tab => {
                tab.addEventListener("click", function () {
                    const category = this.innerText.includes("Sites") ? "sites" : "apps";
                    showTab(category);
                });
            });
        });
    </script>
</body>

</html>