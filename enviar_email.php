<?php

$destinatario = "jean.magic@hotmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$number = $_REQUEST['tel'];
$msg = $_REQUEST['textomsg'];

$corpo = "===================================" . "\n";
$corpo = $corpo . "FALE CONOSCO " . "\n";
$corpo = $corpo . "===================================" . "\n\n";
$corpo = $corpo . "Nome: " . $nome . "\n";
$corpo = $corpo . "Email: " . $email . "\n";
$corpo = $corpo . "Mensagem: " . $mensagem . "\n\n";
$corpo = $corpo . "===================================" . "\n";

$headers = 'From: Titulo da aplicacao <no-reply@dominio.com>'."\r\n" .
        'Reply-To: no-reply@dominio.com '. "\r\n" .
        'X-Mailer: MyFunction/' . phpversion().
        'MIME-Version: 1.0' . "\n".
        'Content-type: text/html; charset=UTF-8' . "\r\n";

mail($destinatario, $assunto , $corpo, $headers, "From: $email\r\n");
