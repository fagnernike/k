<?php
	// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
	// O return-path deve ser ser o mesmo e-mail do remetente.
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: contato@fagnermendes.com.br\r\n"; // remetente
	$headers .= "Return-Path: contato@fagnermendes.com.br\r\n"; // return-path
	$envio = mail("fagnernike@gmail.com", "Assunto", "Texto", $headers);
		 
	if($envio)
		echo $_POST["nome"]."Sua mensagem foi enviada com sucesso";
	 
	else
	 	echo $_POST["nome"]."A mensagem não pode ser enviada";
?>