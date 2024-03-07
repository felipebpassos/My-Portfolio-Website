// Quando o mouse entra em .saiba-mais ou .menu-sobre, adicionamos a classe .visivel a .menu-sobre
$('.saiba-mais, .menu-sobre').mouseenter(function() {
    $('.menu-sobre').addClass('visivel');
    $('.saiba-mais').addClass('fade');
});

// Quando o mouse sai de .saiba-mais ou .menu-sobre, removemos a classe .visivel de .menu-sobre
$('.saiba-mais, .menu-sobre').mouseleave(function() {
    $('.menu-sobre').removeClass('visivel');
    $('.saiba-mais').removeClass('fade');
});