<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    /* Verificando Email e Senha */
    if ($email === "davipenso@gmail.com" && $senha === "123123!") {
        echo "Login bem-sucedido!";
    } else {
        echo "Login falhou. Verifique seu Email e senha e tente novamente.";
    }
}
