<?php

	$nome = $_GET['nome'];
	$email = strtolower($_GET['email']);
	$telefone = $_GET['telefone'];
	$mensagem = $_GET['mensagem'];

	$email_remetente = 'contato@ederton.xyz';
	$para = 'pix90vendas@gmail.com';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: $nome_site <$email_remetente>\n";
	$headers .= "Return-Path: $nome_site <$email_remetente>\n";
	$headers .= "Reply-To: $nome <$email>\n";

	if($mensagem != ''){

		$titulo = 'Tenho uma dúvida sobre o PIX90';
		$conteudo = '
		<h2>Uma nova <strong>mensagem</strong> foi enviada através do site pix90.com.br</h2>';

	}else{

		$titulo = 'Quero vender no Mercado Livre usando o PIX90';
		$conteudo = '
		<h2>Uma nova <strong>solicitação</strong> foi enviada através do site pix90.com.br</h2>';

	}


	$conteudo .= '<p>';
	$conteudo .= '<strong>Nome:</strong> '.ucwords(strtolower($_GET['nome']));
	$conteudo .= '<br><strong>E-mail:</strong> '.$email;
	$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;

	if($mensagem != ''){
		$conteudo .= '<br><strong>Mensagem:</strong> '.$mensagem;
	}

	$conteudo .= '</p>';
	if(mail($para, $titulo, $conteudo, $headers, "-f$email_remetente")){
		mail('edertton@gmail.com', $titulo, $conteudo, $headers, "-f$email_remetente");
		echo(json_encode('ok'));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar a sua solicitação. <br>Por favor, tente novamente mais tarde."));
	}
?>