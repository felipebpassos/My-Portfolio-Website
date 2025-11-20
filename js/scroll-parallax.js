const navItems = document.querySelectorAll('nav div');
const logoBtn = document.getElementById('logo');
const redesContato = document.querySelector('.redes-contato');
const portfolio = document.getElementById('portfolios');
const solucoes = document.getElementById('solucoes');
const scrollIcon = document.getElementById('scroll-ico');
const menuItems = document.querySelectorAll('.menu li');
let currentSection = 0;
let isScrolling = false;
let startY = null; // Para armazenar a posicao inicial do toque
const nativeScrollSelector = 'input, textarea, select, [data-allow-native-scroll]';

function allowsNativeScroll(target) {
    if (!target) {
        return false;
    }
    const textNodeType = typeof Node !== 'undefined' ? Node.TEXT_NODE : 3;
    const element = target.nodeType === textNodeType ? target.parentElement : target;
    return element && element.closest(nativeScrollSelector);
}


scrollToSection(currentSection);

// Função para scroll usando o mouse (wheel)
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
    }, 1500); // Tempo de atraso (1,5 segundos)
});

// Função para scroll usando as setas do teclado
window.addEventListener('keydown', (event) => {
    if (isScrolling) return;
    isScrolling = true;

    if (event.key === 'ArrowDown' || event.key === 'ArrowRight') {
        currentSection = Math.min(currentSection + 1, sections.length - 1);
    } else if (event.key === 'ArrowUp' || event.key === 'ArrowLeft') {
        currentSection = Math.max(currentSection - 1, 0);
    }

    scrollToSection(currentSection);
    updateNavigationButtons(currentSection);

    setTimeout(() => {
        isScrolling = false;
    }, 400); // Tempo de atraso (400ms)
});

// Função para capturar a posição inicial do toque
window.addEventListener('touchstart', (event) => {
    if (allowsNativeScroll(event.target)) {
        startY = null;
        return;
    }
    startY = event.touches[0].clientY;
});

// Função para detectar o movimento de deslize (scroll) em dispositivos móveis
window.addEventListener('touchmove', (event) => {
    if (allowsNativeScroll(event.target)) {
        startY = null;
        return;
    }

    if (isScrolling) {
        event.preventDefault();
        return;
    }

    if (startY === null) {
        startY = event.touches[0].clientY;
    }

    const deltaY = startY - event.touches[0].clientY;

    if (Math.abs(deltaY) > 30) { // Limite para evitar mudancas acidentais de secao
        event.preventDefault();
        isScrolling = true;
        if (deltaY > 0) {
            currentSection = Math.min(currentSection + 1, sections.length - 1);
        } else {
            currentSection = Math.max(currentSection - 1, 0);
        }

        scrollToSection(currentSection);
        updateNavigationButtons(currentSection);

        setTimeout(() => {
            isScrolling = false;
        }, 400); // Tempo de atraso (1,5 segundos)
    }
}, { passive: false });

// Funções de navegação por clique
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

navItems.forEach((item) => {
    item.addEventListener('click', () => {
        const target = item.getAttribute('data-target');
        const targetSection = document.querySelector(`#${target}`);

        let targetIndex = -1;
        sections.forEach((section, i) => {
            if (section === targetSection) {
                targetIndex = i;
                currentSection = targetIndex;
            }
        });

        scrollToSection(currentSection); // Rolar para a seção correspondente
        updateNavigationButtons(currentSection);
    });
});

menuItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        currentSection = index;

        sections.forEach(section => {
            section.classList.remove('blur');
        });
        animation.classList.remove('blur');
        translation.classList.remove('blur');
        logoBtn.classList.remove('blur');
        redesContato.classList.remove('blur');
        toggleMenuButton.classList.remove('hidden');
        closeMenu.classList.add('hidden');
        menu.classList.add('invisible');
        navg.classList.remove('blur');
        menuLi.classList.remove('ativo');

        scrollToSection(currentSection);
        updateNavigationButtons(currentSection);
    });
});

// Função para rolar até a seção desejada
function scrollToSection(index) {
    sections.forEach((section, i) => {
        const scale = i === index ? 1 : 0; // Define a escala de 0 para todas as seções, exceto a atual
        const opacity = i === index ? 1 : 0;
        section.style.transform = `scale(${scale})`;
        section.style.opacity = opacity;
    });
}

// Detecta mudanças na orientação da tela
function checkPortraitMode() {
    return window.innerHeight > window.innerWidth;
}

// Função para atualizar os botões de navegação
function updateNavigationButtons(currentIndex) {
    navItems.forEach(navItem => {
        navItem.querySelector('li').classList.remove('clicked');
        const paragraph = navItem.querySelector('p');
        paragraph.classList.remove('clicked');

        if (currentIndex === 2) {
            paragraph.style.display = 'none';
        } else {
            paragraph.style.display = 'block';
        }
    });

    const currentNavItem = navItems[currentIndex];
    currentNavItem.querySelector('li').classList.add('clicked');
    currentNavItem.querySelector('p').classList.add('clicked');

    // Verifica se estamos em modo portrait e se a seção não é a primeira
    if (checkPortraitMode() && currentIndex !== 0) {
        logoBtn.classList.add('hidden');
        redesContato.classList.add('hidden');
    } else {
        logoBtn.classList.remove('hidden');
        redesContato.classList.remove('hidden');
    }
}
