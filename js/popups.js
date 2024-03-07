$(document).ready(function() {

    //Sobre Mim
    $('#sobre-mim').click(function() {
        $('#sobre-mim-popup').removeClass('hidden');
    });

    $('#close-sobre-mim').click(function() {
        $('#sobre-mim-popup').addClass('hidden');
    });

    //Habilidades
    $('#habilidades').click(function() {
        $('#habilidades-popup').removeClass('hidden');
    });

    $('#close-habilidades').click(function() {
        $('#habilidades-popup').addClass('hidden');
    });

    //Portfolio
    $('.portfolio').click(function() {
        $('#portfolio-popup').removeClass('hidden');
    });

    $('#close-portfolio').click(function() {
        $('#portfolio-popup').addClass('hidden');
    });

    //Serviços
    $('.servico').click(function() {
        $('#servico-popup').removeClass('hidden');
    });

    $('#close-servico').click(function() {
        $('#servico-popup').addClass('hidden');
    });

    //Contato
    $('#contato-btn').click(function() {
        $('#contato-form').removeClass('hidden');
    });

    $('#close-contato').click(function() {
        $('#contato-form').addClass('hidden');
    });
});
