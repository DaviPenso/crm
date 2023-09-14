$(document).ready(function () {
    $('#contato-clientes').on('submit', function () {
        // Envia os dados para o servidor usando AJAX
        $.ajax({
            url: './actions/contato.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                console.log(response);
            }
        });

        return false;
    });

<<<<<<< HEAD
    $('#login-usuarios').on('submit' , function () {
            $.ajax({
                url: './actions/login.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    console.log(response);
=======
    $('#login-usuarios').on('submit', function () {
        $.ajax({
            url: './actions/login.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                const info = jQuery.parseJSON(response);

                if (info.code == 200) {
                    $("#userdata").html(`
                        <div class='mt-3 border-top pt-3'>
                            <h5>Dados do usuário</h5>
                            Nome: ${info.data.usuario.nome} <br>
                            Email: ${info.data.usuario.email} <br>
                        </div>
                    `);
                } else {
                    $("#userdata").html(`
                        <div class='mt-3 alert alert-danger'>
                            Erro: ${info.message}
                        </div>
                    `);
>>>>>>> ff92b06c894ccdbd5b103326cf5091a7c62cfd8f
                }
            }
        });

        return false;
    });

    $("#btn-logout").on("click", function () {
        $.ajax({
            url: './actions/logout.php',
            type: 'POST',
            success: function (response) {
                alert("Logout realizado");

                setTimeout(function () {
                    window.location.reload();
                }, 1000);
            }
        });
    });
});