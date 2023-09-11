<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="panel panel-default mt-5" id="panel-title">
        <div class="panel-body text-center">
            <h3>Fale Conosco</h3>
        </div>
    </div>
    <div class="container mt-5">
        <main>
            <form id="contato_clientes">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                </div>
                <div class="form-group mt-3">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" id="mensagem" rows="5" placeholder="Escreva sua mensagem"></textarea>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Enviar</button>
            </form>

            <div id="mensagem-resposta"></div>
            <div id="destinatario"></div>

            <script>
               // $(document).ready(function() {
               //     $('#contato_clientes').submit(function(e) {
               //         e.preventDefault(); // Evita o envio padrão do formulário

                        // Coleta os dados do formulário
                        var destinatario = "davipenso@gmailcom";
                        var nome = $('#nome').val();
                        var mensagem = $('#mensagem').val();

                        // Envia os dados para o servidor usando AJAX
                        $.ajax({
                            url: './actions/contato.php',
                            type: 'POST',
                            data: {
                                destinatario: destinatario,
                                nome: nome,
                                mensagem: mensagem
                            },
                            success: function(response) {
                                $('#mensagem-resposta').html(response);
                            }
                        });
                //    });
            //    });
            </script>
</body>
</html>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <script src="./scripts.js"></script>
</body>

</html>

