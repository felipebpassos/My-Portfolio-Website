document.addEventListener('DOMContentLoaded', function() {
    const contatoBtn = document.getElementById('contato-btn');
    const closeContato = document.getElementById('close-contato');
    const contatoForm = document.getElementById('contato-form');

    contatoBtn.addEventListener('click', function() {
        contatoForm.classList.remove('hidden');
    });

    closeContato.addEventListener('click', function() {
        contatoForm.classList.add('hidden');
    });
});
