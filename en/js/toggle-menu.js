const toggleMenuButton = document.querySelector('.toggle-menu');
const closeMenu = document.querySelector('.close-menu');
const menu = document.querySelector('.menu');
const logo = document.querySelector('.logo');
const menuLi = menu.querySelector('ul');
const navg = document.querySelector('nav');
const sections = document.querySelectorAll('section'); // Seleciona todas as seções
const animation = document.querySelector('.animation-container');
const translation = document.querySelector('.language-translator');

toggleMenuButton.addEventListener('click', () => {
    sections.forEach(section => {
        section.classList.add('blur');
    });
    animation.classList.add('blur');
    translation.classList.add('blur');
    toggleMenuButton.classList.add('hidden');
    closeMenu.classList.remove('hidden');
    menu.classList.remove('hidden');
    logo.classList.add('blur');
    navg.classList.add('blur');
    menuLi.classList.add('ativo');
});

closeMenu.addEventListener('click', () => {
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
});
