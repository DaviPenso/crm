$(document).ready(function () {
    $('#contato-clientes').on('submit', function () {
        // Coleta os dados do formulário
        // const destinatario = $('#destinatario').val();
        // const nome = $('#nome').val();
        // const mensagem = $('#mensagem').val();

        // Envia os dados para o servidor usando AJAX
        $.ajax({
            url: './actions/contato.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                $('#mensagem-resposta').html(response);
            }
        });

    });
});