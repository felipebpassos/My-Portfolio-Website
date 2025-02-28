$(document).ready(function () {

    //Sobre Mim
    $('#sobre-mim').click(function () {
        $('#sobre-mim-popup').removeClass('hidden');
    });

    $('#close-sobre-mim').click(function () {
        $('#sobre-mim-popup').addClass('hidden');
    });

    //Habilidades
    $('#habilidades').click(function () {
        $('#habilidades-popup').removeClass('hidden');
    });

    $('#close-habilidades').click(function () {
        $('#habilidades-popup').addClass('hidden');
    });

    //Portfolios

    // Detecta se o dispositivo é touch
    var isTouchDevice = ('ontouchstart' in window || navigator.maxTouchPoints > 0);

    // Para dispositivos não touch (mouse)
    if (!isTouchDevice) {
        $('.portfolio').click(function () {
            var section = $(this).attr('id'); // Obtém o ID do elemento clicado
            window.location.href = BASE_URL + '/portfolio#' + section; // Redireciona com a âncora
        });

        $('.ver-cases').addClass('hidden');
    }

    // Para dispositivos touch
    if (isTouchDevice) {
        $('.ver-cases').click(function () {
            var section = $(this).closest('.portfolio').attr('id'); // Obtém o ID do elemento pai
            window.location.href = BASE_URL + '/portfolio#' + section; // Redireciona com a âncora
        });
    }

    $('#close-portfolio').click(function () {
        $('#portfolio-popup').addClass('hidden');
    });

    //Serviços
    $('.servico').click(function () {
        var servicoSelecionado = $(this).data('id');
        $('#' + servicoSelecionado).removeClass('hidden');
        $('#servico-popup').removeClass('hidden');
    });

    $('#close-servico').click(function () {
        $('#servico-popup').addClass('hidden');
        $('#sites-servicos, #marketing, #softwares').addClass('hidden');
    });

    //Contato
    $('#contato-submit').click(function () {
        $('#contato-form').removeClass('hidden');
    });

    $('#contato-btn').click(function () {
        $('#contato-form').removeClass('hidden');
    });

    $('#close-contato').click(function () {
        $('#contato-form').addClass('hidden');
    });
});
