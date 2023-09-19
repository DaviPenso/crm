<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="mt-5 text-center">
        <h3>Login de Usuários</h3>
    </div>
    <div class="container mt-5">
        <main class="form-signin w-25 m-auto">
            <div class="card">
                <div class="card-body">
                    <form id="login-usuarios">
                        <div class="form-floating mb-1">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu email">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                            <label for="senha">Senha</label>
                        </div>

                        <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Acessar</button>

                        <div id="userdata">
                            <?php
                            if (!empty($_SESSION['LOGADO']) && !empty($_SESSION['USER'])) {
                            ?>
                                <div class='mt-3 border-top pt-3'>
                                    <h5>Dados do usuário</h5>
                                    Nome: <?php echo $_SESSION['USER']->nome; ?> <br>
                                    Email: <?php echo $_SESSION['USER']->email; ?> <br>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <?php
                        if (!empty($_SESSION['LOGADO']) && !empty($_SESSION['USER'])) {
                        ?>
                            <div class="mt-4">
                                <button type="button" id="btn-logout" class="btn btn-secondary">Logout</button>
                            </div>

                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./scripts.js" type="text/javascript"></script>
</body>

</html>