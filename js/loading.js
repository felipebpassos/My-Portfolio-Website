document.addEventListener("DOMContentLoaded", function () {
    var fundoLoader = document.getElementById("fundo-loader");
    var loader = document.getElementById("loader");

    // Função para esconder o loader
    function hideLoader() {
        loader.style.transition = "opacity 1s"; // Adiciona uma transição de 1 segundo para suavizar a mudança de opacidade
        loader.style.opacity = "0";

        // Após a transição, defina o display para "none"
        setTimeout(function () {
            loader.style.display = "none";
            fundoLoader.style.display = "none";

            // Restaurar overflow padrão no body
            document.body.style.overflow = "auto";

            // Carregar imagens
            loadImages();
            
            // Carregar vídeos
            loadVideos();
            
            // Carregar scripts
            loadScripts();
        }, 700); // Ajuste o tempo conforme necessário
    }

    // Função para carregar imagens
    function loadImages() {
        var lazyImages = document.querySelectorAll('.lazy-img');
        lazyImages.forEach(function (img) {
            img.src = img.getAttribute('data-src');
            img.classList.remove('lazy-img');
        });
    }

    function loadVideos() {
        var lazyVideos = document.querySelectorAll('.lazy-video');
        lazyVideos.forEach(function (video) {
            var source = video.querySelector('source');
            if (source) {
                source.src = source.getAttribute('data-src');
                video.load(); // Carregar o vídeo após atualizar o src
            }
            // Certifique-se de que os atributos essenciais estão presentes
            video.muted = true;    // Ativar modo mudo
            video.autoplay = true; // Forçar autoplay
            video.playsInline = true; // Permitir inline playback (necessário para iOS)
            video.loop = true; // Opcional: repetir o vídeo
            video.play();      // Iniciar a reprodução
            video.classList.remove('lazy-video');
        });
    }    

    // Função para carregar scripts
    function loadScripts() {
        var lazyScripts = document.querySelectorAll('.lazy-script');
        lazyScripts.forEach(function (scriptDiv) {
            var script = document.createElement('script');
            script.src = scriptDiv.getAttribute('data-src');
            document.body.appendChild(script);
            scriptDiv.classList.remove('lazy-script');
        });
    }

    // Adiciona o evento de load para chamar a função hideLoader
    window.addEventListener("load", hideLoader);
});
