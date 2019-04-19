<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo-tela-novo-user.css">
	<link rel="shortcut icon" href="_imagens/icone.png">
</head>
<body>

	<fieldset id="campo-cadastro">
	<legend id="legenda">Cadastrar Usuário</legend>
	<form method="POST" action="_controles/processa-cadastro-fornecedor.php">

		<label for="nome">Nome:</label> <input type="text" id="nome" name="nome"><br>
		<label for="cnpj">CPF:</label> <input type="text" id="cpf" name="cpf"><br>

		<fieldset id="tipo-user" class="form-interno, relative-parent">
		<legend id="legenda-end">Tipo de Usuário</legend>
			<div id="tipos" class="relative">
				<input type="radio" name="tipo" id="adm" value="0" checked><label id="label-adm" for="adm"> Administrador</label>
				<input type="radio" name="tipo" id="pad" value="1"><label id="label-pad" for="pad"> Padrão</label>
			</div>
		</fieldset>

		<fieldset id="dados-login" class="form-interno">
		<legend id="legenda-dados-login">Dados de Login</legend>
			<label for="email">Email:</label><input type="email" id="email" name="email"><br>
			<label for="senha">Senha:</label><input type="password" id="senha" name="senha"><br>
			<label for="rsenha">Repetir Senha:</label><input type="password" id="rsenha" name="rsenha"><br>
		</fieldset>
		<input type="submit" value="Cadastrar" id="botao"><br>
	</form>
	</fieldset>
</body>
</html>