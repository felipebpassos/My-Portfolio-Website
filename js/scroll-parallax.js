const navItems = document.querySelectorAll('nav div');
const sections = document.querySelectorAll('section');
const logoBtn = document.getElementById('logo');
const ContatoBtn = document.getElementById('contato-submit');
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
    }, 700); // Defina o tempo de atraso aqui (1 segundo neste exemplo)
});

logoBtn.addEventListener('click', function () {
    currentSection = 0;
    scrollToSection(currentSection);
    updateNavigationButtons(currentSection);
});

ContatoBtn.addEventListener('click', function () {
    currentSection = 5;
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

function scrollToSection(index) {
    sections.forEach((section, i) => {
        const scale = i === index ? 1 : 0; // Define a escala de 0 para todas as seções, exceto a atual
        section.style.transform = `scale(${scale})`;
    });
}

function updateNavigationButtons(currentIndex) {
    // Remova a classe "clicked" de todos os botões de navegação
    navItems.forEach(navItem => {
        navItem.querySelector('li').classList.remove('clicked');
        navItem.querySelector('p').classList.remove('clicked');
    });

    // Adicione a classe "clicked" ao botão de navegação correspondente à seção atual
    const currentNavItem = navItems[currentIndex];
    currentNavItem.querySelector('li').classList.add('clicked');
    currentNavItem.querySelector('p').classList.add('clicked');
}
