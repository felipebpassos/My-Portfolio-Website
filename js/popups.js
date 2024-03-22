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
        var servicoSelecionado = $(this).data('id');
        $('#' + servicoSelecionado).removeClass('hidden');
        $('#servico-popup').removeClass('hidden');
    });

    $('#close-servico').click(function() {
        $('#servico-popup').addClass('hidden');
        $('#sites, #marketing, #softwares').addClass('hidden');
    });

    //Contato
    $('#contato-submit').click(function() {
        $('#contato-form').removeClass('hidden');
    });

    $('#contato-btn').click(function() {
        $('#contato-form').removeClass('hidden');
    });

    $('#close-contato').click(function() {
        $('#contato-form').addClass('hidden');
    });
});
