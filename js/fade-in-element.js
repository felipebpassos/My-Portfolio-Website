const fadeElements = document.querySelectorAll('.fade-in-element');

const fadeInObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && !entry.target.classList.contains('fade-in')) {
      entry.target.classList.add('fade-in');
      // Após o elemento ser desbotado uma vez, você pode desconectar o observador
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 }); // Modifique este valor conforme necessário para ajustar quando o desbotamento ocorre

fadeElements.forEach(element => {
  fadeInObserver.observe(element);
});
