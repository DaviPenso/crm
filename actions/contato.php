<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatario = $_POST["destinatario"];
    $destinatarioNome = $_POST["destinario-nome"];
    $nome = $_POST["nome"];
    $mensagem = $_POST["mensagem"];
} else {
    echo "O método exigido para esta requisição é POST!";
    exit;
}

/* Envio do Email */
include '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Instancia a classe e cria um objeto

try {
    //Server settings
    $mail->isSMTP();
    $mail->SMTPDebug  = 4;
    $mail->Host       = 'smtp.hostinger.com';
    $mail->Port       = 587;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@sabercristao.com.br';
    $mail->Password   = 'Noreply159753@!';

    // Recipients
    $mail->setFrom("noreply@sabercristao.com.br", "Saber Cristão | Não responda!!");
    $mail->addAddress($destinatario, $destinatarioNome);
    $mail->addCC('felipefcamp@gmail.com');

    //Content
    $dataHoje = date("d/m/Y") . " às " . date("H:i:s");

    $mail->isHTML(true);
    $mail->Subject = "Mensagem de Cliente em CRM";
    $mail->CharSet = 'UTF-8';
    $mail->Body    = "
        <p>Nome: {$nome}</p>
        <p>Mensagem: {$mensagem}</p>

        <br><br>

        Email enviado em {$dataHoje}
    ";

    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo "A mensagem não pôde ser enviada. Erro PHPMailer: {$mail->ErrorInfo} - Erro PHP: {$e->getMessage()}";
}
