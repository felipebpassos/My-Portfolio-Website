const navItems = document.querySelectorAll('nav div');
const logoBtn = document.getElementById('logo');
const portfolio = document.getElementById('portfolios');
const solucoes = document.getElementById('solucoes');
const scrollIcon = document.getElementById('scroll-ico');
const menuItems = document.querySelectorAll('.menu li');
let currentSection = 0;
let isScrolling = false;

scrollToSection(currentSection);

window.addEventListener('wheel', (event) => {
    if (isScrolling) return;
    isScrolling = true;

    const delta = event.deltaY;
    currentSection = Math.min(Math.max(currentSection + (delta > 0 ? 1 : -1), 0), sections.length - 1);
    scrollToSection(currentSection);

    // Atualize os botões de navegação aqui
    updateNavigationButtons(currentSection);

    setTimeout(() => {
        isScrolling = false;
    }, 1500); // Defina o tempo de atraso aqui (1 segundo neste exemplo)
});

// Ouvinte de evento de teclado para detectar as teclas de seta para cima e para baixo
window.addEventListener('keydown', (event) => {
    if (isScrolling) return;
    isScrolling = true;

    if (event.key === 'ArrowDown' || event.key === 'ArrowRight') {
        // Rolar para baixo ou para a próxima seção
        currentSection = Math.min(currentSection + 1, sections.length - 1);
    } else if (event.key === 'ArrowUp' || event.key === 'ArrowLeft') {
        // Rolar para cima ou para a seção anterior
        currentSection = Math.max(currentSection - 1, 0);
    }

    scrollToSection(currentSection);

    // Atualize os botões de navegação aqui
    updateNavigationButtons(currentSection);

    setTimeout(() => {
        isScrolling = false;
    }, 400); // Defina o tempo de atraso aqui (700ms neste exemplo)
});

logoBtn.addEventListener('click', function () {
    currentSection = 0;
    scrollToSection(currentSection);
    updateNavigationButtons(currentSection);
});

portfolio.addEventListener('click', function () {
    currentSection = 2;
    scrollToSection(currentSection);
    updateNavigationButtons(currentSection);
});

solucoes.addEventListener('click', function () {
    currentSection = 3;
    scrollToSection(currentSection);
    updateNavigationButtons(currentSection);
});

// Adicione um ouvinte de clique a cada item da lista
navItems.forEach((item) => {
    item.addEventListener('click', () => {

        const target = item.getAttribute('data-target');
        const targetSection = document.querySelector(`#${target}`);

        // Encontre o índice da targetSection
        let targetIndex = -1;
        sections.forEach((section, i) => {
            if (section === targetSection) {
                targetIndex = i;
                currentSection = targetIndex;
            }
        });

        scrollToSection(currentSection); // Rolar para a seção correspondente

        // Atualize os botões de navegação aqui
        updateNavigationButtons(currentSection);
    });
});

// Adicione um ouvinte de clique a cada item do menu
menuItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        // Atualize o índice da seção atual para corresponder ao índice do item clicado no menu
        currentSection = index;

        sections.forEach(section => {
            section.classList.remove('blur');
        });
        animation.classList.remove('blur');
        translation.classList.remove('blur');
        toggleMenuButton.classList.remove('hidden');
        closeMenu.classList.add('hidden');
        menu.classList.add('hidden');
        logo.classList.remove('blur');
        navg.classList.remove('blur');
        menuLi.classList.remove('ativo');

        // Rolar para a seção correspondente
        scrollToSection(currentSection);

        // Atualize os botões de navegação aqui
        updateNavigationButtons(currentSection);
    });
});

//FUNÇÔES

function scrollToSection(index) {
    sections.forEach((section, i) => {
        const scale = i === index ? 1 : 0; // Define a escala de 0 para todas as seções, exceto a atual
        const opacity = i === index ? 1 : 0;
        section.style.transform = `scale(${scale})`;
        section.style.opacity = opacity;
    });
}

function updateNavigationButtons(currentIndex) {
    // Remova a classe "clicked" de todos os botões de navegação
    navItems.forEach(navItem => {
        navItem.querySelector('li').classList.remove('clicked');
        const paragraph = navItem.querySelector('p');
        paragraph.classList.remove('clicked');

        // Verifique se currentIndex é igual a 2 para ocultar o parágrafo
        if (currentIndex === 2) {
            paragraph.style.display = 'none';
        } else {
            paragraph.style.display = 'block';
        }
    });

    // Adicione a classe "clicked" ao botão de navegação correspondente à seção atual
    const currentNavItem = navItems[currentIndex];
    currentNavItem.querySelector('li').classList.add('clicked');
    currentNavItem.querySelector('p').classList.add('clicked');
}


