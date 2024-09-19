const portfolios = document.querySelectorAll('.portfolio');

// Detecta se o dispositivo é touch
var isTouchDevice = ('ontouchstart' in window || navigator.maxTouchPoints > 0);

// Para dispositivos não touch (mouse)
if (!isTouchDevice) {
  // Loop através de todos os elementos com a classe .portfolio
  portfolios.forEach(portfolio => {
    // Crie um elemento para representar o círculo
    const circle = document.createElement('div');
    circle.classList.add('custom-cursor');
    circle.textContent = 'Ver Projetos';
    portfolio.appendChild(circle);

    // Calcule o deslocamento necessário para centralizar o círculo
    const circleOffsetX = circle.offsetWidth / 2;
    const circleOffsetY = circle.offsetHeight / 2;

    // Adicione um evento de escuta para rastrear o movimento do mouse em cada elemento .portfolio
    portfolio.addEventListener('mousemove', (event) => {
      // Posicione o círculo centralizado nas coordenadas do mouse, em relação ao elemento .portfolio
      circle.style.left = event.pageX - portfolio.offsetLeft - circleOffsetX + 'px';
      circle.style.top = event.pageY - portfolio.offsetTop - circleOffsetY + 'px';
    });

    // Quando o mouse entra no elemento .portfolio, oculte o cursor padrão
    portfolio.addEventListener('mouseenter', () => {
      circle.style.display = 'block';
    });

    // Quando o mouse sai do elemento .portfolio, mostre o cursor padrão novamente
    portfolio.addEventListener('mouseleave', () => {
      circle.style.display = 'none';
    });
  });
}
