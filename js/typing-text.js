document.addEventListener("DOMContentLoaded", function () {
    const words = ["Digitais", "eficientes", "escaláveis", "sob medida"];
    let wordIndex = 0;
    let charIndex = 0;
    const typingDelay = 150;
    const erasingDelay = 100;
    const newWordDelay = 2000; // Tempo de espera após terminar de digitar
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".blinking-cursor");

    function type() {
        if (charIndex < words[wordIndex].length) {
            typedTextSpan.textContent += words[wordIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } else {
            setTimeout(erase, newWordDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            typedTextSpan.textContent = words[wordIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } else {
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, typingDelay);
        }
    }

    setTimeout(type, newWordDelay); // Começar a digitar após a página carregar
});
