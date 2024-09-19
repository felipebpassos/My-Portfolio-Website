document.getElementById('whatsapp').addEventListener('input', function (event) {
    const previousText = event.target.getAttribute('data-previous') || '';
    const currentText = event.target.value;
    handlePhoneInput(currentText, previousText, event.target);
    event.target.setAttribute('data-previous', currentText);
});

function handlePhoneInput(text, previousText, inputElement) {
    let cleaned = text.replace(/[^\d]/g, ''); // Remove tudo que não é número

    if (text.length < previousText.length) {
        inputElement.value = text; // Permite deletar o texto
    } else {
        // Formata para o padrão (79) 9 9999-9999
        let formatted = cleaned.replace(/(\d{2})(\d{1})(\d{4})(\d{0,4})/, '($1) $2 $3-$4');
        inputElement.value = formatted;
    }
}
