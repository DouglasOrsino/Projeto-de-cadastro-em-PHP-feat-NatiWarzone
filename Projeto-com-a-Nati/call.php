<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

	$chamado = addslashes($_POST['chamado']);
	$empresa = addslashes($_POST['empresa']);
	$requisitante = addslashes($_POST['requisitante']);
	$email = addslashes($_POST['email']);
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
			"Email: ".$email. "\r\n".
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
		echo("Operação não sucedida, servidor sem capacidade para este tipo de operação, tente rodar a aplicação em outro servidor!");
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Abertura de Chamados</title>
</head>

<body>

		<nav>
			<div class="logo">
				<h4>Abertura de Chamados</h4>
			</div>
			<ul class="nav-links">
				<li>
					<a class="clicar" href="#" onclick="toggle_visibility('conteudo');">Adicionar</a>
				</li>
				<li>
					<a class="clicar" href="#">Histórico</a>
				</li>
			</ul>
			<div class="burger">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>

			</div>
		</nav>

	<div id="conteudo">

		<form method="POST" action="call.php">
			<fieldset class="grupo">

				<div class="campo">
					<label for="chamado">Chamado:</label>
					<input type="text" name="chamado" id="chamado" required>
				</div>
				<div class="campo">
					<label for="empresa">Empresa:</label>
					<input type="text" name="empresa" id="empresa" required>
				</div>

			</fieldset>

		<fieldset class="grupo">

			<div class="campo">
				<label for="requisitante">Requisitante:</label>
				<input type="text" name="requisitante" id="requisitante" required>
			</div>
			<div class="campo">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>
			</div>
			<div class="campo">
				<label for="responsavel">Técnico responsável:</label>
				<input type="text" name="responsavel" id="responsavel" required>
			</div>

		</fieldset>

		<fieldset class="grupo">

			<div class="campo">
				<label for="prioridade">Prioridade:</label>
				<input type="text" name="prioridade" id="prioridade" required>
			</div>
			<div class="campo">
				<label for="status">Status:</label>
				<input type="text" name="status" id="status" required>
			</div>

		</fieldset>

		<div class="campo">
			<br>
	            <label>Descrição</label>
	            <textarea row="6" id="descricao" name="descricao"></textarea>	
		</div>

		<fieldset class="grupo">

			<div class="campo">
				<label for="dt_start">Data Início:</label>
				<input type="date" name="dt_start" id="dt_start" required>	
			</div>
			<div class="campo">
				<label for="dt_prev">Data Previsão:</label>
				<input type="date" name="dt_prev" id="dt_prev" required>	
			</div>
			<div class="campo">
				<label for="dt_finish">Data Término:</label>
				<input type="date" name="dt_finish" id="dt_finish" required>	
			</div><br><br>

		</fieldset>

			<button type="submit">Concluído</button>

		</form>

	</div>

	<script type="text/javascript" src="app.js"></script>
</body>
</html>