<?php

$emaildestinatario = "jeff_verdan@outlook.com";
$emailremetente = trim($_POST[email]);
$nomeremetente = $_POST[name];
$assunto = $_POST[subject];
$mensagem = $_POST[message];


$mensagemHTML = '
<strong>Formulário de Contato</strong> 
<p><b>Nome:</b> '.$nomeremetente.' <p>
<b>E-Mail:</b> '.$emailremetente.' <p>
<b>Assunto:</b> '.$assunto.' <p>
<b>Mensagem:</b> '.$mensagem.'</p>
<hr>';

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";
$headers .= "Return-Path: $emaildestinatario \r\n";

$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
?>
