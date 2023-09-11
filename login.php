<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-color: #f6fc7e">
    <div class="panel panel-default mt-5" id="panel-title">
        <div class="panel-body text-center">
            <h3>Login de Usuários</h3>
        </div>
    </div>
    <div class="container mt-5">
        <main class="form-signin w-25 m-auto">
            <form>
                <div class="form-floating mb-1">
                    <input type="email" class="form-control" id="email" placeholder="Informe seu email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="senha" placeholder="Senha">
                    <label for="floatingPassword">Senha</label>
                </div>
                <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Acessar</button>
            </form>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>