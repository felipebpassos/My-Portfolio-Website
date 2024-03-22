const container = document.querySelector('body');
const img = document.querySelector('.apresentacao-principal img');

container.addEventListener('mousemove', (e) => {
    const xOffset = (e.clientX / container.offsetWidth - 0.5) * 25; // Calcula o deslocamento horizontal
    const yOffset = (e.clientY / container.offsetHeight - 0.5) * 12; // Calcula o deslocamento vertical
    img.style.transform = `translate(${xOffset}px, ${yOffset}px)`; // Aplica a transformação na imagem
});