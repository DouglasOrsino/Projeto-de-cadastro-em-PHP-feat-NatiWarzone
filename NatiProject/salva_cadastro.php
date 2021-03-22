<?php 

if (isset($_POST['chamado']) && !empty($_POST['chamado'])) {

	$chamado = addslashes($_POST['chamado']);
	$empresa = addslashes($_POST['empresa']);
	$requisitante = addslashes($_POST['requisitante']);
	$responsavel = addslashes($_POST['responsavel']);
	$prioridade = addslashes($_POST['prioridade']);
	$status = addslashes($_POST['status']);
	$descricao = addslashes($_POST['descricao']);
	$dt_start = addslashes($_POST['dt_start']);
	$dt_prev = addslashes($_POST['dt_prev']);
	$dt_finish = addslashes($_POST['dt_finish']);

	$to = "douglas.orsino@al.infnet.edu.br";
	$subject = "Testando bd";
	$body = "Chamado: ".$chamado. "\r\n".
			"Empresa: ".$empresa. "\r\n".
			"Requisitante: ".$requisitante. "\r\n".
			"Técnico Responsável: ".$responsavel. "\r\n".
			"Prioridade: ".$prioridade. "\r\n".
			"Status: ".$status. "\r\n".
			"Descrição: ".$descricao. "\r\n".
			"Data Início: ".$dt_start. "\r\n".
			"Data Previsão: ".$dt_prev. "\r\n".
			"Data Término: ".$dt_finish;
	$header = "From:douglas.orsino@protonmail.com". "\r\n"
				."Reply-To:".$chamado."\r\n"
				."X=Mailer:PHP/".phpversion();


	if (mail($to, $subject, $body, $header)) {
		echo ("Enviado com sucesso!");
	}else {
		echo("Erro 505, arquivo não enviado");
	}

}

?>