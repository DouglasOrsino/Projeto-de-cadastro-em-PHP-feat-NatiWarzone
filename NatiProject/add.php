<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Chamado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="add.css">
</head>
<body style="background: url('back.jpg');">

<div>	
	<h1 id="titulo">Cadastrar Chamado</h1>
</div>

<form method="POST" action="salva_cadastro.php">
	<fieldset class="grupo">

		<div class="campo">
			<label for="chamado"><strong>Chamado:</strong></label>
			<input type="email" name="chamado" id="chamado" required>
		</div>
		<div class="campo">
			<label for="empresa"><strong>Empresa:</strong></label>
			<input type="text" name="empresa" id="empresa" required>
		</div>

	</fieldset>

	<fieldset class="grupo">

		<div class="campo">
			<label for="requisitante"><strong>Requisitante:</strong></label>
			<input type="text" name="requisitante" id="requisitante" required>
		</div>
		<div class="campo">
			<label for="responsavel"><strong>Técnico responsável:</strong></label>
			<input type="text" name="responsavel" id="responsavel" required>
		</div>

	</fieldset>

	<fieldset class="grupo">

		<div class="campo">
			<label for="prioridade"><strong>Prioridade:</strong></label>
			<input type="text" name="prioridade" id="prioridade" required>
		</div>
		<div class="campo">
			<label for="status"><strong>Status:</strong></label>
			<input type="text" name="status" id="status" required>
		</div>

	</fieldset>

	<div class="campo">
		<br>
            <label><strong>Descrição</strong></label>
            <textarea row="6" style="width: 26em" id="descricao" name="descricao"></textarea>	
	</div>

	<fieldset class="grupo">

		<div class="campo">
			<label for="dt_start"><strong>Data Início:</strong></label>
			<input type="date" name="dt_start" id="dt_start" required>	
		</div>
		<div class="campo">
			<label for="dt_prev"><strong>Data Previsão:</strong></label>
			<input type="date" name="dt_prev" id="dt_prev" required>	
		</div>
		<div class="campo">
			<label for="dt_finish"><strong>Data Término:</strong></label>
			<input type="date" name="dt_finish" id="dt_finish" required>	
		</div>

	</fieldset>

	<button type="submit" style="background-color: none; border:2px black solid; margin-left:29%;"><strong>Concluído</strong></button>

</form>

</body>
</html>