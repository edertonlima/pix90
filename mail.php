<?php

	$nome = $_GET['nome'];
	$email = strtolower($_GET['email']);
	$telefone = $_GET['telefone'];

	$email_remetente = 'contato@ederton.xyz';
	$para = 'doaltivo@gmail.com';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: $nome_site <$email_remetente>\n";
	$headers .= "Return-Path: $nome_site <$email_remetente>\n";
	$headers .= "Reply-To: $nome <$email>\n";

	$conteudo = '
	<h2>Uma nova solicitação foi enviada através do site pix90.com.br</h2>';

	$conteudo .= '<p>';
	$conteudo .= '<strong>Nome:</strong> '.ucwords(strtolower($_GET['nome']));
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
	$conteudo .= '</p>';
	if(mail($para, "Quero vender no Mercado Livre usando o Pix90", $conteudo, $headers, "-f$email_remetente")){
		mail('edertton@gmail.com', "Quero vender no Mercado Livre usando o Pix90", $conteudo, $headers, "-f$email_remetente");
		echo(json_encode('ok'));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar a sua solicitação. <br>Por favor, tente novamente mais tarde."));
	}
?>