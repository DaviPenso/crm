<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    /* Verificando Usuario e Senha */
    if ($login === "davipenso@gmail.com" && $senha === "123123!") {
        echo "Login bem-sucedido!";
    } else {
        echo "Login falhou. Verifique seu Usuário e senha e tente novamente.";
    }
}
