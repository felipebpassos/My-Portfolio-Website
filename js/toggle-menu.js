const toggleMenuButton = document.querySelector('.toggle-menu');
const closeMenu = document.querySelector('.close-menu');
const menu = document.querySelector('.menu');
const menuLi = menu.querySelector('ul');
const section = document.querySelector('section');
const animation = document.querySelector('.animation-container');
const translation = document.querySelector('.language-translator');


toggleMenuButton.addEventListener('click', () => {
    section.classList.toggle('blur');
    animation.classList.toggle('blur');
    translation.classList.toggle('blur');
    toggleMenuButton.classList.add('hidden');
    closeMenu.classList.remove('hidden');
    menu.classList.remove('hidden');
    menuLi.classList.toggle('ativo');
});

closeMenu.addEventListener('click', () => {
    section.classList.toggle('blur');
    animation.classList.toggle('blur');
    translation.classList.toggle('blur');
    toggleMenuButton.classList.remove('hidden');
    closeMenu.classList.add('hidden');
    menu.classList.add('hidden');
    menuLi.classList.toggle('ativo');
});