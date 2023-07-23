<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurações do e-mail
    $to = "gustavo.terres@escola.pr.gov.br"; // Substitua pelo seu e-mail
    $subject = "Mensagem do site ChangeMakers";
    $headers = "From: " . $email;

    // Corpo do e-mail
    $body = "Nome: " . $nome . "\n";
    $body .= "E-mail: " . $email . "\n\n";
    $body .= "Mensagem:\n" . $mensagem;

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.</p>";
    }
}
?>
