$(document).ready(function() {
    // Seleção de opções personalizadas para Serviço e Orçamento
    $('.select-container .option').on('click', function() {
        var selectedValue = $(this).data('value');
        var selectContainer = $(this).closest('.select-container');
        
        // Atualiza o texto da opção selecionada no select personalizado
        selectContainer.find('.selected-option span').text(selectedValue);
        
        // Atualiza o input oculto associado
        if (selectContainer.attr('id') === 'select-servico') {
            $('#input-servico').val(selectedValue);
        } else if (selectContainer.attr('id') === 'select-budget') {
            $('#input-budget').val(selectedValue);
        }
    });

    // Validação e envio do formulário
    $('#formulario-contato').on('submit', function(event) {
        event.preventDefault(); // Impede o envio automático

        // Validações
        var valid = true;

        // Valida nome
        if ($('#nome').val().trim() === "") {
            alert("Por favor, insira seu nome.");
            valid = false;
        }

        // Valida WhatsApp
        if ($('#whatsapp').val().trim() === "") {
            alert("Por favor, insira seu WhatsApp.");
            valid = false;
        }

        // Valida Serviço
        if ($('#input-servico').val() === "") {
            alert("Por favor, selecione um serviço.");
            valid = false;
        }

        // Valida Orçamento
        if ($('#input-budget').val() === "") {
            alert("Por favor, selecione um orçamento.");
            valid = false;
        }

        if (valid) {
            // Submissão do formulário se todos os campos obrigatórios estiverem preenchidos
            this.submit();
        }
    });
});
