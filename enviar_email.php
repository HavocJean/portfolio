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


mail($destinatario, $assunto , $corpo, "From: $email\r\n");

