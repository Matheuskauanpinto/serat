<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resposta = $_POST["resposta"];

    // Configuração para enviar email usando Gmail SMTP
    $to_email = "mcmatheuslining11@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Resposta do Site de Namoro";
    $message = "A pessoa respondeu: $resposta";

    $headers = "From: mcmatheuslining11@gmail.com"; // Substitua pelo seu endereço de email
    $headers .= "Content-Type: text/html; charset=UTF-8";

    // Configurações do servidor SMTP do Gmail
    $smtp_server = "smtp.gmail.com";
    $smtp_username = "mcmatheuslining11@gmail.com"; // Substitua pelo seu endereço de email do Gmail
    $smtp_password = "Mc1184950!"; // Substitua pela senha do seu email do Gmail
    $smtp_port = 587; // Porta padrão do SMTP para o Gmail

    // Configuração para usar criptografia TLS
    $smtp_secure = "tls";

    // Envia o email usando SMTP
    if (mail($to_email, $subject, $message, $headers, "-f$smtp_username")) {
        echo "Obrigado por sua resposta. Um email foi enviado.";
    } else {
        echo "Houve um problema ao enviar o email.";
    }
} else {
    echo "Acesso inválido.";
}
?>
