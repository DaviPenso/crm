<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="panel panel-default mt-5" id="panel-title">
        <div class="panel-body text-center">
            <h3>Fale Conosco</h3>
        </div>
    </div>
    <div class="container mt-5">
        <main>
            <form id="contato-clientes">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo">
                </div>
                <div class="form-group mt-3">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" name="mensagem" id="mensagem" rows="5" placeholder="Escreva sua mensagem"></textarea>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Enviar</button>

                <input type="hidden" name="destinatario" id="destinatario" value="davipenso@gmail.com">
                <input type="hidden" name="destinario-nome" id="destinario-nome" value="Davi Penso">
            </form>

            <div id="mensagem-resposta"></div>
        </main>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="./scripts.js"></script>
</body>

</html>